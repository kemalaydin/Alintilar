Alıntılar
=========

İrfanın hafta sonu projesi


Sistemde bir classın otomatik olarak çalışması için:
	app/start/global.php e ekle
	composer.json a autoload e ekle
	composer dunp-autoload


Kullanacağımız RESTful sistem
GET 	  /resource 			index 	resource.index
GET 	  /resource/create 		create 	resource.create
POST 	  /resource 			store 	resource.store
GET 	  /resource/{resource} 		show 	resource.show
GET 	  /resource/{resource}/edit 	edit 	resource.edit
PUT/PATCH /resource/{resource} 		update 	resource.update
DELETE 	  /resource/{resource} 		destroy resource.destroy
