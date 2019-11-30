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
                Message
            </h1>
            <p
            class="title font-weight-light pa-4"
            align="left"
            justify="center"
            
        >
        Everyone has their own struggle.
        The best therapy to encourage and overcome obstacles, seeking helps and stopping shame.
        It helps you to reduce stigma and improve your quality of life. This can help you to be more comfortable talking about mental health without fears.


        </p>
        </v-container>
        <v-container >
                <v-divider class="mt-4"></v-divider>
                <h1 class="pt-4 display-1 font-weight-bold" align="center" justify="center">Latest Topics</h1>
                <v-divider class="ma-4 pa-4"></v-divider>
                <v-row class="text-center ma-4 pa-4" justify="center" align="center">
                    
                        <div class="ma-2">
                            <v-btn large>Motivation</v-btn>
                        </div>
                        <div class="ma-2">
                                <v-btn large>Study</v-btn>
                            </div>
                            <div class="ma-2">
                                    <v-btn large>Life</v-btn>
                                </div>
                                <div class="ma-2">
                                        <v-btn large>Inspiring</v-btn>
                                    </div>
                                    <div class="ma-2">
                                            <v-btn large>Artist</v-btn>
                                        </div>
                    </v-row>

                    
            </v-container>
       
        <v-container >
							
						</v-container>
						<template>
							<v-container>
									<v-layout row wrap justify-space-between>
								<v-flex class="pt-4">
													<v-card
									class="mx-auto"
									color="#26c6da"
									dark
									max-width="400"
								>
									
									<v-card-text class="headline font-weight-bold">
										"Turns out semicolon-less style is easier and safer in TS because most gotcha edge cases are type invalid as well."
									</v-card-text>
							
									<v-card-actions>
										<v-list-item class="grow">
											
											<v-list-item-content>
												<v-list-item-title>Richard Jon</v-list-item-title>
											</v-list-item-content>
							
										</v-list-item>
									</v-card-actions>
								</v-card>
												
								</v-flex>
							
								<v-flex class="pt-4" xs12 md6>
								<v-card
									class="mx-auto"
									color="#26c6da"
									dark
									max-width="400"
								>
									
									<v-card-text class="headline font-weight-bold">
										"Turns out semicolon-less style is easier and safer in TS because most gotcha edge cases are type invalid as well."
									</v-card-text>
							
									<v-card-actions>
										<v-list-item class="grow">
											
											<v-list-item-content>
												<v-list-item-title>Mukesh Ambani</v-list-item-title>
											</v-list-item-content>
							
										</v-list-item>
									</v-card-actions>
								</v-card>
												
											</v-flex>

											<v-flex class="pt-4">
													<v-card
									class="mx-auto"
									color="#26c6da"
									dark
									max-width="400"
								>
									
									<v-card-text class="headline font-weight-bold">
										"Turns out semicolon-less style is easier and safer in TS because most gotcha edge cases are type invalid as well."
									</v-card-text>
							
									<v-card-actions>
										<v-list-item class="grow">
											
											<v-list-item-content>
												<v-list-item-title>Hollard Philips</v-list-item-title>
											</v-list-item-content>
							
										</v-list-item>
									</v-card-actions>
								</v-card>
												
								</v-flex>
							
								<v-flex class="pt-4" xs12 md6>
								<v-card
									class="mx-auto"
									color="#26c6da"
									dark
									max-width="400"
								>
									
									<v-card-text class="headline font-weight-bold">
										"Turns out semicolon-less style is easier and safer in TS because most gotcha edge cases are type invalid as well."
									</v-card-text>
							
									<v-card-actions>
										<v-list-item class="grow">
											
											<v-list-item-content>
												<v-list-item-title>Lynda Jones</v-list-item-title>
											</v-list-item-content>
							
										</v-list-item>
									</v-card-actions>
								</v-card>
												
											</v-flex>
											
								</v-layout>
							
							</v-container>
							</template>
                            <v-divider class="ma-4 pa-4"></v-divider>

        		<v-container >
						<v-card
							dark
							raised
							class="blue-grey darken-1"
							align="center"
							justify="center"
						>
							<h1 class="pt-4 display-1 font-weight-regular">Messages and Quotes</h1>
							<v-row align="center" justify="center" class="pa-4">
									<p class="title font-weight-light pa-4">
                                             The best therapy to encourage and overcome obstacles, seeking helps and stopping shame.
                                            It helps you to reduce stigma and improve your quality of life. This can help you to be more comfortable talking about mental health without fears.

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