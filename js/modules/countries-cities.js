const { createApp } = Vue;

export function countriesVue() {
  createApp({
    data() {
      return {
        countries: [],
        selectedCountry: '',
        cities: [],
        selectedCity: null,
        activities: []
      };
    },

    created() {
      this.fetchCountries();
    },

    methods: {
      fetchCountries() {
        // Countries
        fetch('http://localhost:8000/countries')
          .then(response => response.json())
          .then(data => {
            this.countries = data;
          })
          .catch(error => {
            console.error('Failed to fetch countries:', error);
          });
      },

      handleCountryChange() {
        if (!this.selectedCountry) {
          this.cities = [];
          return;
        }

        //Cities
        fetch(`http://localhost:8000/cities/${this.selectedCountry}`)
          .then(response => response.json())
          .then(data => {
            this.cities = data;
          })
          .catch(error => {
            console.error('Failed to fetch cities:', error);
          });
      },

      onDragStart(city, event) {
        event.dataTransfer.setData('city', JSON.stringify(city));
        event.target.classList.add('dragging');
      },

      onDragEnd(event) {
        event.target.classList.remove('dragging');
      },

      onDragOver(event) {
        event.preventDefault();
      },

      onDrop(event) {
        event.preventDefault();
        const cityData = JSON.parse(event.dataTransfer.getData('city'));
        this.selectedCity = cityData;
      
        // Activities 
        fetch(`http://localhost:8000/activities/${cityData.id}`)
          .then(response => response.json())
          .then(data => {
            this.activities = data;
          })
          .catch(error => {
            console.error('Failed to fetch activities:', error);
            this.activities = [];
          });
      }
    }
  }).mount('#country-info');
}
