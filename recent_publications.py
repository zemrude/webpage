import json
import urllib

# Only the 10 latests publications
def getAuthorData(authorID="Juan.Antonio.Aguilar.Sanchez.1"):
    url =  "http://inspirehep.net/search?p=author:%s&of=recjson&ot=recid,title&rg=10" %(authorID)
    response = urllib.urlopen(url)
    data = json.loads(response.read())
    return data


def getTitle(data):
    return [[entry["title"]["title"], entry["recid"]] for entry in data]

def makeWidget(data):
    entry = ""
    for title,recid in getTitle(data):
        if recid == None or title == None:
            continue


        entry += "<div class=\"row\">"
        entry += "<div class=\"large-12 columns\" style=\"padding-bottom:10px\"><a href=\"http://inspirehep.net/record/%i\" target=\"_blanck\">%s</a></div>"  %(recid, title.encode('utf-8'))
        entry += "</div>"

    return entry


def index():
    data = getAuthorData()
    chain = "<!DOCTYPE html><html lang=\"en\"><head><meta charset=\"utf-8\" /><meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" /><link rel=\"stylesheet\" href=\"css/foundation.css\" /><link rel=\"stylesheet\" href=\"css/foundation-icons.css\" /><link rel=\"stylesheet\" href=\"css/font-awesome.css\" /><link rel=\"stylesheet\" href=\"css/academicons.css\" /><script src=\"js/vendor/modernizr.js\"></script><script type='text/javascript' src='https://d1bxh8uas1mnw7.cloudfront.net/assets/embed.js'></script></head><body>"
    chain += makeWidget(data)
    chain +="</body></html>"
    return chain
