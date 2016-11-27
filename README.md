# CEUR Make Graphical User Interface ( ceur-make-ui )
*"CEUR Make Graphical User Interface is a usable web frontend for supporting the workflow of publishing proceedings of 
scientific workshops"*

CEUR Make Graphical User Interface or ceur-make-ui is a graphical user interface for [ceur-make](https://github.com/ceurws/ceur-make). CEUR Make Graphical User Interface tries to automate the workflow for publishing proceedings at [CEUR-WS.org](http://ceur-ws.org/) by providing a usable web frontend. It is a standalone software that could be used on any platform through browser. For development purposes, please refer to the **Up and Running** and **How to Play with the Code** section. 

**The live version will be up at the end of *December 2016*. Stay tuned for the link to the live address.**

##Key Advantages

##Features

##Disclaimer

##Prerequisites

In order to install it on your local machine and start playing with the code, the setup is simple. The only prerequisite to start working with the code is to have AMP stack working that is Apache, MySQL and PHP. You can either go with installing the stack manually or the bundle comes in couple of flavours that you can install from their respective sites as listed below:

+ [XAMP](https://www.apachefriends.org/index.html): For OsX, Windows and Linux
+ [MAMP](https://www.mamp.info/en/): For OsX and Windows
+ [WAMP](http://www.wampserver.com/en/): For Windows

You can either go with one of these bundles or set up one of your own choice that can help you running with the AMP( Apache, MySQL and PHP ) stack. Once the bundle is installed on your local machine, you can clone the [ceur-make-ui](https://github.com/ceurws/ceur-make-ui) code into **htdocs** directory in case of XAMP or MAMP and **www** directory in case of WAMP.

##Up and Running
Once you are done installing the AMP stack and cloning the ceur-make-ui code in the concerned directory that is **htdocs** or **www** as explained in the previous section, you can go to the following path in the ceur-make-ui directory:

*ceur-make-ui/CeurMakeGUI/index/* 

After you are in the index directory, you can double click the index.html to run in the browser or you can choose a code editor of your own choice to start playing with the code. Advanced techniques to use the code are discussed in the next section.

##How to Play with the Code
Previous section described the technique to get started with the code and in this section we will describe the advanced techniques to play with different files in the code. First we discuss the external libraries used in the project, than we describe the general software architecture of the ceur-make-ui and than we will discuss the file structure in different layers of the application along with the code blocks programmers can start to play with.

###External Libraries
The external libraries used to develop the CEUR Make Graphical User Interface are presented below:

+ [Materializecss](http://materializecss.com/): Materialize.css was used to develop the interface based on Google's [material design](https://material.google.com/) principles. Throughout the project, Materialize.css is used to develop material design based look and feel.
+ [jQuery Steps](http://www.jquery-steps.com/): jQuery Steps is used to create stepwise forms for creating xml format based required artifacts which are the Table of Contents file and Workshop file.

###Software Architecture
The following figure shows the general software architecture of the web application:

![alt tag](https://github.com/ceurws/ceur-make-ui/blob/master/ReferenceDocuments/Images/architecture.png)

**Interface Layer** consists of all the presentation elements. It is responsible in displaying visual elements, handling the dependencies on external libraries for user interface elements, styling the web pages and managing the user interactions with the web pages. **Middleware Layer** is responsible in generating artifacts that are required for publishing at CEUR Workshop Proceedings. **Storage Layer** stores the files that are created temporarily on the server.

The file structure of each individual layer and the code blocks are presented in the following sections:

####Interface Layer
![alt tag](https://github.com/ceurws/ceur-make-ui/blob/master/ReferenceDocuments/Images/htmlcssfilestructure.png)

####Middleware Layer
![alt tag](https://github.com/ceurws/ceur-make-ui/blob/master/ReferenceDocuments/Images/middlewareceurgui.png)

####Storage Layer
![alt tag](https://github.com/ceurws/ceur-make-ui/blob/master/ReferenceDocuments/Images/ceurmakeguistorage.png)

##Contributors
[Dr. Christoph Lange](https://langec.wordpress.com/)

[Rohan Asmat](https://www.linkedin.com/in/rohanasmat?trk=nav_responsive_tab_profile)

##License
This code is licensed under [GPL version 3](https://github.com/ceurws/ceur-make-ui/blob/master/LICENSE) or any later version.

