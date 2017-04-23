# CEUR Make Graphical User Interface ( ceur-make-ui )
*"CEUR Make Graphical User Interface is a usable web frontend for supporting the workflow of publishing proceedings of 
scientific workshops"*

**[Live demo](http://butterbur13.iai.uni-bonn.de)**

CEUR Make Graphical User Interface or ceur-make-ui is a graphical user interface for [ceur-make](https://github.com/ceurws/ceur-make). CEUR Make Graphical User Interface tries to automate the workflow for publishing proceedings at [CEUR-WS.org](http://ceur-ws.org/) by providing a usable web frontend. It is a standalone software that could be used on any platform through browser. For development purposes, please refer to the **Up and Running** and **How to Play with the Code** section. 

## Prerequisites

In order to install it on your local machine and start playing with the code, the setup is simple. The only prerequisite to start working with the code is to have AMP stack working that is Apache, MySQL and PHP. You can either go with installing the stack manually or the bundle comes in couple of flavours that you can install from their respective sites as listed below:

+ [XAMP](https://www.apachefriends.org/index.html): For OsX, Windows and Linux
+ [MAMP](https://www.mamp.info/en/): For OsX and Windows
+ [WAMP](http://www.wampserver.com/en/): For Windows

You can either go with one of these bundles or set up one of your own choice that can help you running with the AMP( Apache, MySQL and PHP ) stack. Once the bundle is installed on your local machine, you can clone the [ceur-make-ui](https://github.com/ceurws/ceur-make-ui) code into **htdocs** directory in case of XAMP or MAMP and **www** directory in case of WAMP.

## Up and Running
Once you are done installing the AMP stack and cloning the ceur-make-ui code in the concerned directory that is **htdocs** or **www** as explained in the previous section, you can go to the following path in the ceur-make-ui directory:

*ceur-make-ui/CeurMakeGUI/index/* 

After you are in the index directory, you can double click the index.html to run in the browser or you can choose a code editor of your own choice to start playing with the code. Advanced techniques to use the code are discussed in the next section.

Following steps are essential before the software is completely running on your web browser using apache server:
+ Extract the output.zip folder from the path: ceur-make-ui/CEURMakeGUI/index/output.zip
+ Changing path in Makefile.vars to the path of SAXON-HE 9 as located in ceur-make-ui/CEURMakeGUI/index/saxon/saxon9he.jar
+ In order for CEUR Make and CEUR Make GUI to be able to write files on server, you should own everything in htdocs/www folder. Please follow sample [link](http://constant.co.za/fix-permissions-on-xampp-osx/) for Mac OSX.
+ In order for you as a user who is owning everything at htdocs/www, you should grant sudo access to yourself, One way to do this is to give yourself root level rights using the following terminal level command: superuser ALL=(ALL) NOPASSWD:ALL . Possilble alternatives could be to grant sudo to php scripts or particular commands.

## How to Play with the Code
Previous section described the technique to get started with the code and in this section we will describe the advanced techniques to play with different files in the code. First we discuss the external libraries used in the project, than we describe the general software architecture of the ceur-make-ui and than we will discuss the file structure in different layers of the application along with the code blocks programmers can start to play with.

### External Libraries
The external libraries used to develop the CEUR Make Graphical User Interface are presented below:

+ [Materializecss](http://materializecss.com/): Materialize.css was used to develop the interface based on Google's [material design](https://material.google.com/) principles. Throughout the project, Materialize.css is used to develop material design based look and feel.
+ [jQuery Steps](http://www.jquery-steps.com/): jQuery Steps is used to create stepwise forms for creating xml format based required artifacts which are the Table of Contents file and Workshop file.

It would be good for any **GEEK** willing to play *with the code* to know these libraries in advance, that would make code understanding very easy for him/her.

### Software Architecture
The following figure shows the general software architecture of the web application:

![alt tag](https://github.com/ceurws/ceur-make-ui/blob/master/ReferenceDocuments/Images/architecture.png)

**Interface Layer** consists of all the presentation elements. It is responsible in displaying visual elements, handling the dependencies on external libraries for user interface elements, styling the web pages and managing the user interactions with the web pages. **Middleware Layer** is responsible in generating artifacts that are required for publishing at CEUR Workshop Proceedings. **Storage Layer** stores the files that are created temporarily on the server.

The file structure of each individual layer and the code blocks are presented in the following sections:

#### Interface Layer
The following figure shows the interface layer of the CEUR Make Graphical User Interface:
![alt tag](https://github.com/ceurws/ceur-make-ui/blob/master/ReferenceDocuments/Images/htmlcssfilestructure.png)

The CSS directory maintains the styling files for the whole web interface and the HTML module contains user interaction web pages.
**Index.html**, **Issue.html**, **Publish.html** and **Proceedings.html** are fairly simple web pages that caters a single use case. 
The *magic of generating the resources for publishing proceedings at CEUR-WS.org* either happens using **PublishPage.html** or using **EasyChair.html**. Both of the later mentioned files are similar in programming structure and they take *functional programming* approach with *camel case* naming conventions. The following are the *main coding blocks* in the two files:

+ **Wizards Initiation & Defining:** The following code represents the two functions used to initialize and define the stepwise wizards:
```
//Workshop.xml Creation
$("#wizard").steps({});

//Table of Contents Creation
$("#wizard").steps({});
```
+ **Display Funtions:** Following are the main display functions as shown in the code below:
```
//display after Table of Contents Creation
afterTocCreation();

//display after Workshop Creation
afterWorkshopCreation();
```
+ **Output Resource Creation:** Functions for the output artifacts creation are shown in the code below:
```
//Copyrights form creation function
copyrightsFormCreation();

//Index.html, BibTex, Zip Archive creation function
afterResourceCreation();
```
+ **Loading Preset Data:** Functions for the loading data in drop down menu are shown in the code section below:
```
//Countries Dropdown Load
selectForCountries();

//Languages Dropdown Load
selectForLanguage();
```

+ **Title Capialization Rules:** Function that maintains title capitalization rules with the cases included is shown below:
```
String.prototype.toTitleCase = function() { } 
```

+ **Form Validation:** Functions that maintains form validations are shown below:
```

//Workshop Form Validators:
validatingMetaData(); //general metadata validation 1st Step
validatingConference(); //conference metadata related validation 2nd Step
validatingEditors(); // editors metadata related validation 3rd step

//Table of Contents Validators:
tocvalidate(); //Step two validator, Step one does not require validation in case of toc
```
#### Middleware Layer
The following figure shows the middleware layer of the CEUR Make Graphical User Interface:
![alt tag](https://github.com/ceurws/ceur-make-ui/blob/master/ReferenceDocuments/Images/middlewareceurgui.png)

Middleware layer is divided into three main parent modules that are **scripts**, **CEUR Make GUI workflow** and **EasyChair workflow**. Scripts section consists of general scripts used for developing CEUR Make Graphical User Interface, currently we use only one that is Github connect(scripts/index.php) to report issues at our repository. CEUR Make GUI Workflow and Easy Chair workflow have similar file structure. Both the modules have *Generate User Folder* scripts that generates user session locally. Both the modules also have *Workshop Generate* that creates the Workshop.xml file. *Doc file* in CEUR Make GUI Workflow module creates Table of Contents(toc.xml). *Extract and Managing Extract* scripts in EasyChair workflow are used to upload and unarchive EasyChair resources and to create toc.xml from those resources.

#### Storage Layer
The following figure shows the storage layer of the CEUR Make Graphical User Interface:
![alt tag](https://github.com/ceurws/ceur-make-ui/blob/master/ReferenceDocuments/Images/ceurmakeguistorage.png)

The storage layer is divided into three main parent directories described below:
+ **Standard Store**: This directory stores files that are used to store standard dataset in JSON format. For example, all the countries of the world and all the languages of the world. This is important to present user with all the options of countries and languages while user is filling in details for metadata of Table of Contents and Workshop files.
+ **UserDirectories**: This directory maintains the sessions of the users while they use CEUR Make Graphical User Interface workflow for creating workshop proceedings.
+ **EasyChair**: This directory maintains the sessions of the users while they use EasyChair resources based workflow for creating workshop proceedings.

## Contributors
[Rohan Asmat](https://www.linkedin.com/in/rohanasmat?trk=nav_responsive_tab_profile)

[Dr. Christoph Lange](https://langec.wordpress.com/)

## License
This code is licensed under [GPL version 3](https://github.com/ceurws/ceur-make-ui/blob/master/LICENSE) or any later version.
