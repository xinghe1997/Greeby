import getContent
import threading
import time
import mysql.connector
import os
#继承threading,重写run方法
class MyThread(threading.Thread):
    def __init__(self,pageNum,url):
        super().__init__()
        self.pageNum = pageNum
        self.url = url
    def run(self):
        page = getContent.getContent(self.url)
        #循环用户需要的页数
        for i in range(0,self.pageNum-1):
            os.chdir("../")
            page = getContent.getContent(page)
def main():
    pageNum = int(input("输入爬取的页数:"))
    url = "https://www.mzitu.com/jiepai/"
    if(pageNum > 1):
         #接收下一页
        stra = time.time()
        t = MyThread(pageNum,url)
        t.start()
        t.join()
        print("运行时间为：",time.time() - stra)
    else:
        getContent.getContent(url)

if __name__ == '__main__':
    main()
    
    
