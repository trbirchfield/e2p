# TX Dental Plan

## Getting started

Clone the repo down to your local machine:

```git clone git@github.com:wlion/txdentalplan.git .```

### Running make

Run the following make commands in this order:

1. ```make env```         // creates the environment file
2. ```make vendor```      // installs the project's required composer, node and bower packages
3. ```make permissions``` // sets the proper permissions on site directories

### Setting up the dev environment

To set up the dev environment, open the new .env file that you created when you ran ```make env```.

Now change lines 4, 12 and 15 to the proper paths for your local environment.

Now you should be good to go!

## Front End Workflow

Most of your work will be done in the ```/resources/client``` directory.

### Building Assets

To compile all your assets (CSS and JavaScript), you will need to use the following tasks:

Command             | Description
------------------- | ---------------------------------------------------------------------------------------------------
```gulp```          | Runs all build tasks once, including "js", "modules", "css", "vendor" and "fonts"
```gulp js```       | Compiles and moves all non-"app" JavaScript files from the /resources/client/js and /resources/admin/js directories into their counterparts in the /public/js and /public/build/js folders
```gulp modules```  | Compiles and moves all files in the app JavaScript files from the /resources/client/js/app and /resources/admin/js/app directories into a sinlge app.js file in the /public/js/admin, /public/js/client, /public/build/js/admin and /public/build/js/client folders.
```gulp css```      | Compiles SASS files in the /resources/client/scss and /resources/admin/scss directories into their counterparts in the /public/css and /public/build/css folders
```gulp vendor```   | Moves pre-configured vendor files from the /bower_components directory to the /public/vendor and /public/build/vendor folders
```gulp fonts```    | Moves font files from the /resources/client/fonts directory and pre-configured vendor fonts from the /bower_components directory to the /public/fonts folder
```gulp cleaup```   | Runs all build tasks and cleans up the build directory so that it only has one version of each file
```gulp watch```    | Watches for changes via the ```gulp css```, ```gulp js``` and ```gulp modules``` tasks.

> Note: Before committing any work, always run ```gulp cleaup```.
