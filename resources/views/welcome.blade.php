
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
	 width: 100%;
	 height: 100vh;
	 background: url(https://bit.ly/2QNWUBq);
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
    <header class="header">
        <nav class="navbar">
          <a class="logo" href="#">Brand</a>
          <input type="checkbox" id="nav" class="hidden">
          <label for="nav" class="nav-toggle">
              <span></span>
              <span></span>
              <span></span>
           </label>
          <div class="wrapper">
            <ul class="menu">
              <li class="menu-item"><a href="#">Home</a></li>
              <li class="menu-item"><a href="#">About</a></li>
              <li class="menu-item"><a href="#">Prices</a></li>
              <li class="menu-item"><a href="#">Service</a></li>
              <li class="menu-item"><a href="#">Works</a></li>
              <li class="menu-item"><a href="#">Contact</a></li>
            </ul>
          </div>
        </nav>
      </header>

  <div id="app">
    <v-app>
      <v-content>
        <v-container>Hello world

            <template>
                <v-card
                  class="mx-auto"
                  color="#26c6da"
                  dark
                  max-width="400"
                >
                  <v-card-title>
                    <v-icon
                      large
                      left
                    >
                      mdi-twitter
                    </v-icon>
                    <span class="title font-weight-light">Twitter</span>
                  </v-card-title>
              
                  <v-card-text class="headline font-weight-bold">
                    "Turns out semicolon-less style is easier and safer in TS because most gotcha edge cases are type invalid as well."
                  </v-card-text>
              
                  <v-card-actions>
                    <v-list-item class="grow">
                      <v-list-item-avatar color="grey darken-3">
                        <v-img
                          class="elevation-6"
                          src="https://avataaars.io/?avatarStyle=Transparent&topType=ShortHairShortCurly&accessoriesType=Prescription02&hairColor=Black&facialHairType=Blank&clotheType=Hoodie&clotheColor=White&eyeType=Default&eyebrowType=DefaultNatural&mouthType=Default&skinColor=Light"
                        ></v-img>
                      </v-list-item-avatar>
              
                      <v-list-item-content>
                        <v-list-item-title>Evan You</v-list-item-title>
                      </v-list-item-content>
              
                      <v-row
                        align="center"
                        justify="end"
                      >
                        <v-icon class="mr-1">mdi-heart</v-icon>
                        <span class="subheading mr-2">256</span>
                        <span class="mr-1">·</span>
                        <v-icon class="mr-1">mdi-share-variant</v-icon>
                        <span class="subheading">45</span>
                      </v-row>
                    </v-list-item>
                  </v-card-actions>
                </v-card>
              </template>


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