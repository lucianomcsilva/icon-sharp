# Icon Sharp
Icon Sharp or Icon # is a simple script developed in PHP to generate some icon marker usually used into maps applications. All you need is a PHP server â€“ could be either Linux, Mac OS or Windows â€“ and GD library installed. You will also need apache server with rewrite rules enable to run it.

# How to Install
Just download the zip file (here) into your Server directory and unzip it. Make sure you PHP with GD library and apache rewrite rules enabled. After your install you should access this page thought this link:

http://yourservername/installdirectory/iconsharp/
# How to use
There are two ways. The shortest link will always show you a white marker with orange border. It is the default patter (you can change it in the code. I kept this cause I like it). You address should be accessed like this:

http://yourservername/installdirectory/iconsharp/123.png
And you will see the following icon:


The other way is the complete address. You must send the three parameters: color, model and value. Your address will seem like

http://yourservername/installdirectory/iconsharp/darkblue_2_99.png
And you will see the following icon:


The available colors are: black, blue, darkblue, green, orange, purple and red. Models are numbered from 1 to 7. You can play with them bellow.

# License
I look for a really permissive license and it is the reason I decided to release this software as LGPL software. My main concern is just to keep it available for other developers to use it and help me to improve it. So, feel free to use it in your free or commercial application, open or proprietary software. But if you make any improvement on it, let us know. And keep our credit, please. ;)
