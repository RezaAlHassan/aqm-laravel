# AQM : Air Quality Monitoring [Laravel 9, SQL & Query Builder]
## An air quality monitoring software that collects everyday air quality data, computes it and shows it in user friendly charts and a dashboard. 

![aqm home 1](https://user-images.githubusercontent.com/24864973/210167997-b56677bd-f06f-4442-8030-e649af3b229c.png)

At a glance 
* 5 Pages: Home (../), Admin Login (../login), Admin Dashboard (../dashboard), Charts-Tables (../chart-tables), Stationwise-Table (../stationwise-table) + 2 other forms (Create and Edit)
* 7 modfified charts, initially collected from Highcharts
* A dashboard that shows latest air quality data for the user's location detected using geolocation
* An admin panel access for overview of computed charts table
* User Authentication for access to admin panel 
* Database shown in a user friendly table, where you can perform CRUD operations
* The data that is shown in the charts can be viewed in the "Charts-Table" sidebar option
* Data queried from Database using Laravel Query Builder and SQL

### Installation
1. Unzip the downloaded archive
2. Copy and paste **aqm** folder in your htdocs folder
3. In your terminal run `composer install`
4. Update your `.env` configurations accordingly (mainly the database configuration)
5. In your terminal run `php artisan key:generate`
6. Run `php artisan migrate` to create the database tables 
7. Go to mysql and manually import 'stationwises_table_data2' from root folder to populate the the database
8. Test!

### Database

#### Stationwise

![aqm admin table](https://user-images.githubusercontent.com/24864973/210167991-876999e8-b87c-4e9e-9267-e7c23934ba17.png)

* id
* created_at 
* aqi - Air Quality Data including all pollutants
* pm2.5 - Main pollutant
* station - Station Number where data is recorded
* district - District where the data was recorded
* season - Season when the data was recorded 
* organization - Organization which recorded the data

#### Dashboard

![aqm overview](https://user-images.githubusercontent.com/24864973/210167953-e3389cd3-5551-4680-941c-e4304c41915e.png)

 * id
 * district
 * temperature
 * rain
 * windspeed 
 * humidity  
 * cloud
 * visbility         

### Charts (Also Viewable as tables in Admin Panel)

![aqm admin chart table](https://user-images.githubusercontent.com/24864973/210168075-7e337ca6-0ca9-48f4-8eac-a7546a16a6cb.png)

#### Map
The daily air quality index (AQI), which represnts the quality of air incliding pollutants today, is shown for all districts

![aqm home 3 map](https://user-images.githubusercontent.com/24864973/210167840-b455e179-a859-44c1-8b35-92fa2788bbe1.png)

#### Yearly Line Chart
The amount of main pollutant in Bangladesh, known as PM2.5, is collected for each day every year in the seven districts of Bangladesh in the database. The data for each district, each year, is combined and averaged using SQL commands and query builder functions. So the data shows the yearly average data for each year, for each district. The data is then shown in the graph using a line graph, y axis being average PM2.5 and x axis representing the years.

![yearlulc](https://user-images.githubusercontent.com/24864973/210167847-422ea341-00d2-4f15-81d9-1f2ff15987b0.png)

#### Bar Chart
The amount of main pollutant in Bangladesh, known as PM2.5, is collected for each day every year in the seven districts of Bangladesh in the database. The data for each year is combined and averaged using SQL commands and query builder functions. So the data shows the yearly average pm2.5 for each year. The data is then shown in the graph using a line graph where, y axis being average PM2.5 and x axis representing the years.

![aqm home 4 barchart](https://user-images.githubusercontent.com/24864973/210168021-ae3346e4-639a-47b2-b7c6-caec53e99811.png)

#### Box Plots
The amount of main pollutant in Bangladesh, known as PM2.5, is collected for each day every year in the seven districts of Bangladesh in the database. The average, lower quartile, upper quatrile, minimum and maximum of the data is shown in yearly and seasonal box plots.

![bp](https://user-images.githubusercontent.com/24864973/210167903-899edde4-8ee4-4499-8365-93910f9aa328.png)

#### Daily Line Chart
The amount of main pollutant in Bangladesh, known as PM2.5, is collected for each day every year in the seven districts of Bangladesh in the database. The daily data for each district is queried using SQL commands and query builder functions. The data is then shown in the graph using a line graph, y axis being average PM2.5 and x axis representing the districts.





