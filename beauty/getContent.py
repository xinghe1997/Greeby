import H
from lxml import etree
import os
import time
import requests
import threading
import mysql.connector
def getContent(url):
    #获取随机ip
    proxy = H.getProxys();
    content = H.getHtml(url,proxy)
    html = etree.HTML(content)
    #获取图片链接
    src = html.xpath("//div[@id='comments']/ul/li//p/img/@data-original")
    #t = threading.Thread(target=downloadFile,args=(src,proxy,))
    #t.start()
    downloadFile(src,proxy)
    #提取下一页连接
    page = html.xpath("//a[@class='prev page-numbers']/@href")
    print(page)
    return str(page[0])

def downloadFile(src,proxy):
    jp = os.path.exists("beautyimg")
    arr = []
    if(jp):
        #改变目录
        os.chdir("beautyimg/")
        for val in src:
            img = requests.get(str(val))
            name = str(int(time.time() * 10000))+os.path.splitext(val)[1]
            with open(name, 'wb') as f:
                f.write(img.content)
                f.close()
            arr.append(('../beauty/beautyimg/'+name,))
        inSert(arr)
    else:
        os.mkdir('beautyimg')
        os.chdir("beautyimg/")
        for val in src:
            img = requests.get(str(val))
            name = str(int(time.time() * 10000))+os.path.splitext(val)[1]
            with open(name, 'wb') as f:
                f.write(img.content)
                f.close()
            arr.append(('../beauty/beautyimg/'+name,))
        inSert(arr)

def showTable():
    db = getConnect()
    myCursor = db.cursor()
    sql = "SHOW TABLES"
    myCursor.execute(sql)
    for table in myCursor:
        
        if(table[0] == 'beauty'):
            return True
    #没有表就创建
    createTable = '''
        CREATE TABLE `main`.`beauty`  (
          `id` int(0) NOT NULL AUTO_INCREMENT,
          `url` varchar(255) NULL,
          PRIMARY KEY (`id`)
        );
        '''
    myCursor.execute(createTable)
    db.close()
    return True    
def getConnect():
    try:
        db = mysql.connector.connect(
                host = "127.0.0.9",
                user = "root",
                passwd = "123456",
                database = "main"
            )
    except:
        print("连接数据库失败")
        return False
    return db
 
def inSert(content):
    db = getConnect()
    myCursor = db.cursor()
    table = showTable()
    if(not table):
        print("插入失败，表未创建")
        return False
    sql = "INSERT INTO beauty (id, url) VALUES (null, %s)"
    
    myCursor.executemany(sql,content)
    db.commit()
    db.close()
   
