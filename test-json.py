import json
import urllib

def getAuthorData(authorID="Juan.Antonio.Aguilar.Sanchez.1"):
    url =  "http://inspirehep.net/search?p=author:%s&of=recjson&ot=recid,authors[0],number_of_authors,title,doi,system_control_number,publication_info,creation_date,url,type,corporate_name[0]" %(authorID)
    response = urllib.urlopen(url)
    data = json.loads(response.read())
    return data


def getDOI(data):
    return [[entry["title"]["title"], entry["doi"]] for entry in data]

def getAltMetricScore(data):
    for title, doi in getDOI(data):
        if doi == None or title == None:
            continue

        if len(doi) > 1:
            doi = doi[-1]

        url = "http://api.altmetric.com/v1/doi/%s" %(doi)
        response = urllib.urlopen(url)
        data = json.loads(response.read())


def makeWidget(data):
    entry = ""
    for title,doi in getDOI(data):
        if doi == None or title == None:
            continue

        if not isinstance(doi, basestring):
            doi = doi[-1]

        #Check the score before making the background-image

        url = "http://api.altmetric.com/v1/doi/%s" %(doi.encode('utf-8'))
        
        response = urllib.urlopen(url)

        if response.code is not 200:
            continue
        altmetricdata = json.loads(response.read())

        score = int(altmetricdata['score'])

        if score <= 1:
            continue


        entry +="<hr></hr>"
        entry += "<div class=\"row\">"
        entry += "<div class=\"small-6 columns\">%s</div>"  %(title.encode('utf-8'))
        entry += "<div class=\"small-6 columns\">"
        entry += "<div class='altmetric-embed' data-link-target='_blank' data-hide-no-mentions='true' data-badge-type='medium-donut' data-badge-details='right' data-doi='%s'>" %(doi.encode('utf-8'))
        entry += "</div></div></div>"

    return entry


def index():
    data = getAuthorData()
    chain = "<!DOCTYPE html><html lang=\"en\"><head><meta charset=\"utf-8\" /><meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" /><link rel=\"stylesheet\" href=\"css/foundation.css\" /><link rel=\"stylesheet\" href=\"css/foundation-icons.css\" /><link rel=\"stylesheet\" href=\"css/font-awesome.css\" /><link rel=\"stylesheet\" href=\"css/academicons.css\" /><script src=\"js/vendor/modernizr.js\"></script><script type='text/javascript' src='https://d1bxh8uas1mnw7.cloudfront.net/assets/embed.js'></script></head><body>"
    chain += makeWidget(data)
    chain +="</body></html>"
    return chain
