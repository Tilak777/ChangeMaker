<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
</head>
<body>
  <div id="app">
    <v-app>
      <v-content>
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
							<h1 class="pt-4 display-2 font-weight-regular">ChangeMaker</h1>
							<v-row align="center" justify="center" class="pa-4">
									<p class="title font-weight-light pa-4">
								The one who never gives up,
								gather knowledge, resources and
								makes that change happen.
										</p>
							</v-row>
						</v-card>
					</v-container>
        </v-container>
     
                <v-footer
                  color="primary lighten-1"
                  padless
                >
                  <v-row
                    justify="center"
                    no-gutters
                  >
                    <v-btn
                      v-for="link in links"
                      :key="link"
                      color="white"
                      text
                      rounded
                      class="my-2"
                    >
                      {{ link }}
                    </v-btn>
                    <v-col
                      class="primary lighten-2 py-4 text-center white--text"
                      cols="12"
                    >
                      {{ new Date().getFullYear() }} — <strong>Vuetify</strong>
                    </v-col>
                  </v-row>
                </v-footer>
           
        
      </v-content>
    </v-app>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/vue@2.x/dist/vue.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.js"></script>
  <script>
        export default {
          data: () => ({
            links: [
              'Home',
              'About Us',
              'Team',
              'Services',
              'Blog',
              'Contact Us',
            ],
          }),
        }
      </script>
</body>
</html>