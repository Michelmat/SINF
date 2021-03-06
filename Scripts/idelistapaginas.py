# -*- encoding: utf-8 -*-
from bs4 import BeautifulSoup
import requests
import simplejson as json

'''
La documentacion puede ser encontrada en
https://www.crummy.com/software/BeautifulSoup/bs4/doc/
'''

'''
LA MISION:
Rescatar los datos basicos de los pisos de alquiler del Cabanyal (Valencia)
encontrados en Idealista.es (ejercicio de demostracion)
'''

## Helper functions
def get_data_safely(list_, index, default):
    try:
        return list_[index].text
    except IndexError:
        return default

def parse(text):
    return bytes(text, 'utf-8').decode('utf-8', 'strict')



## Codigo de la mision
f = open('idealista_houses4.json', mode='w')
root_url = "https://www.idealista.com"
active_url = "/alquiler-viviendas/valencia/valencia/"
idealista_houses = list()
while True:
    req  = requests.get(root_url+active_url)
    data = req.text
    soup = BeautifulSoup(data, "html.parser")
    houses = soup.find_all("div", class_="item")
    # OTRA OPCION: houses = soup_find_all('element', {'class': ""})
    for house in houses:
        item_link = house.find("a", class_="item-link")
        name = item_link.text
        url = item_link['href']
        price = house.find("span", class_="item-price").text
        details = house.find_all("span", class_="item-detail")
        rooms = get_data_safely(details, 0, "")
        size = get_data_safely(details, 1, "")
        moreinfo = get_data_safely(details, 2, "")
	date = get_data_safely(details,3,"")
        try:
            phone = house.find("a", class_="item-clickable-phone").text
        except AttributeError:
            phone = ""
        idealista_houses.append({
            'name': name,
            'url': url,
            'price': price,
            'rooms': rooms,
            'size': size,
            'moreinfo': moreinfo,
            'phone': phone,
	    'date' : date
       } )
    next_url = soup.find("a", class_="icon-arrow-right-after")
    if not next_url:
        break
    active_url = next_url["href"]
    
##print(json.dumps(idealista_houses, indent=4, ensure_ascii=False, encoding="utf-8"))
f.write(json.dumps(idealista_houses, indent=4))
f.close()

