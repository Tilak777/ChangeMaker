<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">

  <style>
        * {
       padding: 0;
       margin: 0;
       box-sizing: border-box;
       list-style: none;
       text-decoration: none;
  }
   body {
       font-family: "Poppins", sans-serif;
       font-size: 1rem;
       font-weight: normal;
       line-height: 1.4;
       color: #333;
       background: #fff;
  }
   .hidden {
       display: none;
  }
   .header {
  
       background-size: cover;
       background-position: center center;
       background-repeat: no-repeat;
  }
   .header .navbar {
       display: flex;
       flex-direction: row;
       flex: 1;
       flex-basis: auto;
       justify-content: space-between;
       align-items: center;
       max-width: 75rem;
       width: 100%;
       padding: 1rem 2rem;
       margin: 0 auto;
  }
   .header .navbar .logo {
       font-family: inherit;
       font-size: 2rem;
       font-weight: 700;
       line-height: inherit;
       text-transform: uppercase;
       color: #333;
  }
   .header .navbar .menu {
       display: flex;
       flex-direction: row;
       flex: 1;
       flex-basis: auto;
       justify-content: center;
       align-items: center;
  }
   .header .navbar .menu-item:not(:first-child) {
       margin-left: 2rem;
  }
   .header .navbar .menu-item a {
       font-family: inherit;
       font-size: 1rem;
       font-weight: 700;
       line-height: inherit;
       color: #333;
       text-transform: uppercase;
  }
   @media only screen and (max-width: 700px) {
       .header .navbar .wrapper {
           position: fixed;
           top: 0;
           left: 0;
           width: 100%;
           height: 100%;
           z-index: -1;
           opacity: 0;
           background: #f4f4f4;
           transition: all 0.3s ease;
      }
       .header .navbar .wrapper .menu {
           display: flex;
           flex-direction: column;
           position: absolute;
           top: 25%;
           width: 100%;
           transform: translateY(-50%);
      }
       .header .navbar .wrapper .menu-item {
           padding-bottom: 1rem;
           width: 100%;
           text-align: left;
      }
       .header .navbar .wrapper .menu-item:nth-child(1) a {
           transition-delay: 0.2s;
      }
       .header .navbar .wrapper .menu-item:nth-child(2) a {
           transition-delay: 0.3s;
      }
       .header .navbar .wrapper .menu-item:nth-child(3) a {
           transition-delay: 0.4s;
      }
       .header .navbar .wrapper .menu-item:nth-child(4) a {
           transition-delay: 0.5s;
      }
       .header .navbar .wrapper .menu-item:not(:first-child) {
           margin-left: 0;
      }
       .header .navbar .wrapper .menu-item a {
           padding: 1rem 2rem;
           opacity: 0;
           color: #333;
           font-size: 1rem;
           font-weight: 600;
           transform: translateX(-20px);
           transition: all 0.3s ease-in-out;
      }
       .header .navbar .nav-toggle {
           display: block;
           position: fixed;
           right: 1rem;
           top: 1rem;
           width: 2.5rem;
           height: 2.5rem;
           cursor: pointer;
           z-index: 999;
      }
       .header .navbar .nav-toggle span {
           display: block;
           width: 20px;
           height: 2px;
           background: #333;
           border-radius: 2px;
           margin-left: 14px;
      }
       .header .navbar .nav-toggle span:nth-child(1) {
           margin-top: 16px;
      }
       .header .navbar .nav-toggle span:nth-child(2) {
           margin-top: 4px;
           opacity: 1;
      }
       .header .navbar .nav-toggle span:nth-child(3) {
           margin-top: 4px;
      }
       .header .navbar #nav:checked + .nav-toggle {
           transform: rotate(45deg);
      }
       .header .navbar #nav:checked + .nav-toggle span {
           background: #333;
           transition: transform 0.5s ease;
      }
       .header .navbar #nav:checked + .nav-toggle span:nth-child(1) {
           transform: translateY(6px) rotate(180deg);
      }
       .header .navbar #nav:checked + .nav-toggle span:nth-child(2) {
           opacity: 0;
      }
       .header .navbar #nav:checked + .nav-toggle span:nth-child(3) {
           transform: translateY(-6px) rotate(90deg);
      }
       .header .navbar #nav:checked ~ .wrapper {
           z-index: 99;
           opacity: 1;
      }
       .header .navbar #nav:checked ~ .wrapper .menu-item a {
           opacity: 1;
           transform: translateX(0);
      }
  }
   
      </style>
      


</head>
<body>
  <div id="app">
    <v-app>
      <v-content>
            <header class="header">
                    <nav class="navbar">
                        <a class="logo" href="#">ChangeMaker</a>
                        <input type="checkbox" id="nav" class="hidden">
                        <label for="nav" class="nav-toggle">
                                <span></span>
                                <span></span>
                                <span></span>
                         </label>
                        <div class="wrapper">
                            <ul class="menu">
                                <li class="menu-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="menu-item"><a href="{{url('podcast')}}">Podcast</a></li>
                                <li class="menu-item"><a href="{{url('message')}}">Message</a></li>
                                <li class="menu-item"><a href="{{url('posts')}}">Confession</a></li>
                                
                            </ul>
                        </div>
                    </nav>
                </header>
                <br/>
                <br/>
                <br/>

        <v-container>
                <h1
                align="left"
                justify="center"
                class="display-2 font-weight-medium pa-4"
                
            >
                Podcast
            </h1>
            <p
            class="title font-weight-light pa-4"
            align="center"
            justify="center"
            
        >
        Everyone has their own stories.
        We all have struggles, succes
            A digital audio file 
made available on the Internet 
for downloading to a computer or mobile device.

        </p>
            
        <v-card class=" pa-4 ">
            <v-container >
                    <v-divider class="mt-4"></v-divider>
                    <h1 class="pt-4 display-1 font-weight-bold" align="center" justify="center">Topics</h1>
                    <v-divider class="ma-4 pa-4"></v-divider>
                    <v-row class="text-center ma-4 pa-4" justify="center" align="center">
                        
                            <div class="ma-2">
                                <v-btn large>Music</v-btn>
                            </div>
                            <div class="ma-2">
                                    <v-btn large>Fashion</v-btn>
                                </div>
                                <div class="ma-2">
                                        <v-btn large>Entertainment</v-btn>
                                    </div>
                                    <div class="ma-2">
                                            <v-btn large>Teacher</v-btn>
                                        </div>
                                        <div class="ma-2">
                                                <v-btn large>Artist</v-btn>
                                            </div>
                        </v-row>

                        <v-row class="text-center ma-2 pa-2" justify="center" align="center">
                        
                                <div class="ma-2">
                                    <v-btn large>Banker</v-btn>
                                </div>
                                <div class="ma-2">
                                        <v-btn large>Technology</v-btn>
                                    </div>
                                    <div class="ma-2">
                                            <v-btn large>Entertainment</v-btn>
                                        </div>
                                        <div class="ma-2">
                                                <v-btn large>Teacher</v-btn>
                                            </div>
                                            <div class="ma-2">
                                                    <v-btn large>Artist</v-btn>
                                                </div>
                                            </v-row>
                </v-container>
                <v-container>
                   
            <script src="https://www.buzzsprout.com/737135.js?player=large" type="text/javascript" charset="utf-8"></script>
        </v-card>
        </v-container>
        <v-container class="" >
                <v-divider class="mt-4"></v-divider>
                <h1 class="pt-4 display-1 font-weight-bold" align="center" justify="center">Latest Episode</h1>
                <v-divider class="pa-4"></v-divider>
            </v-container>
        
                <v-container align="center" justify="center">
                  
                        <v-layout row wrap justify-space-between align="center" justify="center" >
								<v-flex class="pl-4 ma-4">
								<v-card
									class="ml-4"
									md6
									
									max-width="400"
								>
                                <script src="https://www.buzzsprout.com/737135/2180384-my-second-podcast.js?player=small" type="text/javascript" charset="utf-8"></script>
									
								</v-card>
												
                            </v-flex>
                            
                                    <v-flex class="pt-4">
                                    <v-card
                                        class="ml-4"
                                        
                                        md6
                                        max-width="400"
                                    >
                                    <script src="https://www.buzzsprout.com/737135/2171330-the-mental-illness-happy-hour.js?player=small" type="text/javascript" charset="utf-8"></script>                                        
                                    </v-card>
                                                    
                                </v-flex>
                 
                                
                               
                        </v-layout>    
                 
        </v-container>
        
				<v-container >
						<v-card
							dark
							raised
							class="blue-grey darken-1"
							align="center"
							justify="center"
						>
							<h1 class="pt-4 display-2 font-weight-regular">Podcast</h1>
							<v-row align="center" justify="center" class="pa-4">
									<p class="title font-weight-light pa-4">
										The one who never gives up,
										gather knowledge, 
										resources and makes that change happen.
										<br/>
											As a leading voice on workplace mental health, the ChangeMaker supports in promoting the mental health of people.
											The series are designed to inspire at all levels to create a culture of mental health and well-being.
											By providing practical guidance and strategies, professionals will be prepared to make positive difference in people's mind set.
											
										</p>
							</v-row>
						</v-card>
					</v-container>
        
        </v-container>
      </v-content>
    </v-app>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/vue@2.x/dist/vue.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.js"></script>
  <script>
    new Vue({
      el: '#app',
      vuetify: new Vuetify(),
    })
  </script>
</body>
</html>