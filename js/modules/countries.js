const { createApp } = Vue;

export function countriesVue() {
    createApp({
        data() {
          return {
            countries: [],
            selectedCountry: ''
          };
        },
        created() {
          this.fetchCountries();
        },
        methods: {
          fetchCountries() {
            fetch('http://localhost:8000/countries')
              .then(response => {
                if (!response.ok) {
                  throw new Error('Failed to fetch countries');
                }
                return response.json();
              })
              .then(data => {
                this.countries = data;
              })
              .catch(error => {
                console.error('Error fetching countries:', error);
              });
          },
          handleCountryChange() {
            console.log('Selected country:', this.selectedCountry);
          }
        }
      }).mount('#country-info');
}