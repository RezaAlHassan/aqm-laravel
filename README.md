# AQM : Air Quality Monitoring [Laravel 9, SQL & Query Builder]
## An air quality monitoring software that collects everyday air quality data, computes it and shows it in user friendly charts and a dashboard. 

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
4. Copy `.env.example` to `.env` and updated the configurations (mainly the database configuration)
5. In your terminal run `php artisan key:generate`
6. Run `php artisan migrate --seed` to create the database tables and seed the roles and users tables

### Database

#### Stationwise
* id
* created_at 
* aqi - Air Quality Data including all pollutants
* pm2.5 - Main pollutant
* station - Station Number where data is recorded
* district - District where the data was recorded
* season - Season when the data was recorded 
* organization - Organization which recorded the data

#### Dashboard
 * id
 * district
 * temperature
 * rain
 * windspeed 
 * humidity  
 * cloud
 * visbility         

### Charts (Also Viewable as tables in Admin Panel)

#### Map
The daily air quality index (AQI), which represnts the quality of air incliding pollutants today, is shown for all districts

#### Yearly Line Chart
The amount of main pollutant in Bangladesh, known as PM2.5, is collected for each day every year in the seven districts of Bangladesh in the database. The data for each district, each year, is combined and averaged using SQL commands and query builder functions. So the data shows the yearly average data for each year, for each district. The data is then shown in the graph using a line graph, y axis being average PM2.5 and x axis representing the years.

#### Bar Chart
The amount of main pollutant in Bangladesh, known as PM2.5, is collected for each day every year in the seven districts of Bangladesh in the database. The data for each year is combined and averaged using SQL commands and query builder functions. So the data shows the yearly average pm2.5 for each year. The data is then shown in the graph using a line graph where, y axis being average PM2.5 and x axis representing the years.

#### Bar Chart
The amount of main pollutant in Bangladesh, known as PM2.5, is collected for each day every year in the seven districts of Bangladesh in the database. The data for each year is combined and averaged using SQL commands and query builder functions. So the data shows the yearly average pm2.5 for each year. The data is then shown in the graph using a line graph where, y axis being average PM2.5 and x axis representing the years.

#### Daily Line Chart
The amount of main pollutant in Bangladesh, known as PM2.5, is collected for each day every year in the seven districts of Bangladesh in the database. The daily data for each district is queried using SQL commands and query builder functions. The data is then shown in the graph using a line graph, y axis being average PM2.5 and x axis representing the districts.

#### Box Plots : Stationwise, Monthly, by Season



