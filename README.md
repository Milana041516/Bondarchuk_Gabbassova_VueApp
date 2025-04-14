# 🌍 TravelPlanner

# Project Overview  

**TravelPlanner** is a responsive and animated travel planning application where users can build their own journey by selecting countries, exploring activities, and booking destinations — all while viewing simulated weather for chosen dates. This project was created to demonstrate the use of **Vue.js**, **JavaScript modules**, **Sass**, and **GSAP animations**, paired with a **custom-built Lumen API** running locally through **WAMP server**.

## Features  
✅ **Country Selector:** Dropdown menu to select a country.  
✅ **Drag & Drop Itinerary:** Users can drag destinations to build a custom trip.  
✅ **Date Calendar:** Choose a date to view day-specific activities and weather.  
✅ **Weather Info:** Simulated weather pulled from your own Lumen API.  
✅ **Activity Display:** View places and experiences with price and type.  
✅ **Booking Feature:** Book a destination or activity via a POST request to the API.  
✅ **GSAP Animations:** Smooth transitions and UI effects to enhance user experience.  
✅ **Fully Responsive Layout:** Optimized across desktop, tablet, and mobile screens.  

## Technologies Used  
🔹 **HTML5** – Semantic markup for structure.  
🔹 **Sass (SCSS)** – Clean and modular CSS preprocessor.  
🔹 **JavaScript (ES6+)** – Modules, DOM manipulation, and form handling.  
🔹 **Vue.js 3** – Reusable components and reactive data handling.  
🔹 **GSAP (GreenSock)** – Scroll and interface animations.  
🔹 **Lumen (PHP Micro-framework)** – RESTful API to handle weather, countries, activities, and bookings.  
🔹 **WAMP Server** – Local server environment to run the Lumen backend.  

## How It Works  
1. The user selects a **country** from a dropdown.  
2. They drag destinations into the itinerary area to plan their trip.  
3. Selecting a **date** triggers a weather display and relevant activities.  
4. **All data** (countries, weather, activities, and bookings) is fetched from a **custom-built Lumen API** hosted on WAMP.  
5. The user can **book a specific activity**, which gets submitted to the backend.  
6. **GSAP animations** are applied throughout the interface to ensure smooth transitions and interactions.  

## Installation  
This project runs locally through WAMP (for the API) and a local dev server (e.g., Vite or Live Server) for the frontend.

**To Run:**
1. Start your WAMP server.
2. Move the `api` folder to your WAMP `www` directory.
3. Run the API:
   ```bash
   php -S localhost:8000 -t public

## Contributing
1. Fork it!
2. Create your feature branch: git checkout -b my-new-feature
3. Commit your changes: git commit -am 'Add some feature'
4. Push to the branch: git push origin my-new-feature
5. Submit a pull request :D

## History
April 14, 2025

## Credits
* Milana Gabbassova
* Dina Bondarchuk

## License
MIT License