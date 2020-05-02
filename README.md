My personal Portfolio

* Initiate npm package:  
```npm init -y```

* Install npm-sass package:  
```npm install node-sass -D```  
  * You can also install Sass globally using:  
```npm install -g sass```

* For using Sass we need to create a script in the package.json file:  
```"scripts": {"sass": "node-sass -w scss/ -o dist/css/ --recursive"},```

* Running npm-sass:  
```npm run sass```
 
