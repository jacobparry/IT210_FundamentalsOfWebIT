#!/usr/bin/python
import MySQLdb
import PIL
from PIL import Image
import urllib
import io
from resizeimage import resizeimage



db = MySQLdb.connect(
		host = "192.168.12.136",  #your host, usually localhost
		user = "myusername",		#your db username
		passwd = "123456",		#your db password
		db = "it210b")				#the db you want to connect to.

#You need to create a Cursor Object. 
#It lets you execute your queries.

cursor = db.cursor()



#Use all the SQL you want
cursor.execute("SELECT imagePath FROM images WHERE uploaded = 0")

for row in cursor.fetchall():
	print row[0]
	fd = urllib.urlopen('http://192.168.166.106' + row[0]) #this is the IIS IP address
	image_file = io.BytesIO(fd.read())
	img = Image.open(image_file)
	basewidth = 300
	wpercent = (basewidth/float(img.size[0]))
	hsize = int((float(img.size[1])*float(wpercent)))
	img = img.resize((basewidth,hsize), PIL.Image.ANTIALIAS)
	img.save('/node/assets/images' + row[0])
	cursor.execute("UPDATE images SET uploaded = 1 WHERE uploaded = 0")
	db.commit()

db.close()
