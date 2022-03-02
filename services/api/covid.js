axios.get('https://covid19.ddc.moph.go.th/api/Cases/today-cases-all')
    .then(response => {
        document.getElementById('update_date').innerHTML = response.data[0].update_date;
        document.getElementById('new_case').innerHTML = response.data[0].new_case;
        document.getElementById('total_case').innerHTML = response.data[0].total_case;
        document.getElementById('new_recovered').innerHTML = response.data[0].new_recovered;
        document.getElementById('total_recovered').innerHTML = response.data[0].total_recovered;
        document.getElementById('total_death').innerHTML = response.data[0].total_death;


    });