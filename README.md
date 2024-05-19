# Car Dealership Management System
Laravel Full Stack Car Dealership Project for ITE 19

This is a Laravel application for managing car dealership operations. It includes modules for managing brands, models, vehicles, customers, dealers, and sales.

Requirements
- PHP >= 8.0
- Composer
- MySQL
- Node.js & npm

> [!NOTE]
> Useful information that users should know, even when skimming content.

> [!TIP]
> Helpful advice for doing things better or more easily.

> [!IMPORTANT]
> Key information users need to know to achieve their goal.

> [!WARNING]
> Urgent info that needs immediate user attention to avoid problems.

> [!CAUTION]
> Advises about risks or negative outcomes of certain actions.


Here is a simple footnote[^1].

A footnote can also have multiple lines[^2].

[^1]: My reference.
[^2]: To add line breaks within a footnote, prefix new lines with 2 spaces.
  This is a second line.

  

Installation
Follow these steps to set up the project on your local machine.

## 1. Clone the repository
```
git clone [https://github.com/yourusername/cardealership.git](https://github.com/yourusername/cardealership.git)
cd cardealership
```
## 2. Install dependencies
Install PHP dependencies using Composer:
```
composer install
```
Install JavaScript dependencies using npm:
```
npm install
```
## 3. Environment setup
Copy the .env.example file to create your .env file:
```
cp .env.example .env
```
Generate an application key:
```
php artisan key:generate
```
## 4. Configure the .env file
Open the .env file and update the following lines with your database configuration:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=cardealer
DB_USERNAME=root
DB_PASSWORD=yourpassword
```
## 5. Run database migrations
Run the migrations to create the necessary tables:
```
php artisan migrate
```
## 6. Seed the database
Seed the database with initial data:
```
php artisan db:seed
```
If you need to seed only specific tables, you can use the --class option. For example:
```
php artisan db:seed --class=SoldTableSeeder
```
## 7. Run the development server
Start the Laravel development server:
```
php artisan serve
```
Visit http://localhost:8000 in your web browser to see the application.
## 9. Compile assets
Compile the frontend assets:
```
npm run dev
```
##Database Seeding##
Here's a detailed explanation of how the database seeding is set up.
##Seeder Files##
`DatabaseSeeder.php`
This is the main seeder file that calls other seeders.

```
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            BrandsTableSeeder::class,
            ModelsTableSeeder::class,
            DealersTableSeeder::class,
            CustomersTableSeeder::class,
            VehiclesTableSeeder::class,
            SoldTableSeeder::class,
        ]);
    }
}
```
`BrandsTableSeeder.php`
Seeds the `brands` table.

```
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BrandsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('brands')->insert([
            ['name' => 'Toyota', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Honda', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Ford', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Chevrolet', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Nissan', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
```
`ModelsTableSeeder.php`
Seeds the `models` table.
```
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ModelsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('models')->insert([
            ['brand_id' => 1, 'name' => 'Corolla', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['brand_id' => 2, 'name' => 'Civic', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['brand_id' => 3, 'name' => 'Focus', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['brand_id' => 4, 'name' => 'Malibu', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['brand_id' => 5, 'name' => 'Sentra', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
```
`DealersTableSeeder.php`
Seeds the `dealers` table.

```
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DealersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('dealers')->insert([
            ['name' => 'Dealer One', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Dealer Two', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Dealer Three', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
```
`CustomersTableSeeder.php`
Seeds the `customers` table.

```
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CustomersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('customers')->insert([
            ['name' => 'John Doe', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Jane Smith', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Robert Brown', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Emily Johnson', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Michael Davis', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Sarah Wilson', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
```
`VehiclesTableSeeder.php`
Seeds the `vehicles` table.

```
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class VehiclesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('vehicles')->insert([
            ['model_id' => 1, 'year' => 2021, 'color' => 'Red', 'price' => 20000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['model_id' => 2, 'year' => 2020, 'color' => 'Blue', 'price' => 22000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['model_id' => 3, 'year' => 2019, 'color' => 'Black', 'price' => 18000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['model_id' => 4, 'year' => 2021, 'color' => 'White', 'price' => 25000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['model_id' => 5, 'year' => 2018, 'color' => 'Gray', 'price' => 15000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['model_id' => 6, 'year' => 2017, 'color' => 'Silver', 'price' => 14000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['model_id' => 7, 'year' => 2021, 'color' => 'Red', 'price' => 30000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['model_id' => 8, 'year' => 2019, 'color' => 'Blue', 'price' => 17000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['model_id' => 9, 'year' => 2020, 'color' => 'Black', 'price' => 35000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['model_id' => 10, 'year' => 2018, 'color' => 'White', 'price' => 32000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            // Add more vehicles as needed
        ]);
    }
}
```

`SoldTableSeeder.php`
Seeds the `solds` table.

```
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SoldTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('solds')->insert([
            ['vehicle_id' => 1, 'customer_id' => 1, 'dealer_id' => 1, 'sold_date' => '2023-01-15', 'sold_price' => 21000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['vehicle_id' => 2, 'customer_id' => 2, 'dealer_id' => 2, 'sold_date' => '2023-02-20', 'sold_price' => 22000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['vehicle_id' => 3, 'customer_id' => 3, 'dealer_id' => 3, 'sold_date' => '2023-03-18', 'sold_price' => 18000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['vehicle_id' => 4, 'customer_id' => 4, 'dealer_id' => 1, 'sold_date' => '2023-04-22', 'sold_price' => 25000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['vehicle_id' => 5, 'customer_id' => 5, 'dealer_id' => 2, 'sold_date' => '2023-05-15', 'sold_price' => 15000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['vehicle_id' => 6, 'customer_id' => 6, 'dealer_id' => 3, 'sold_date' => '2023-06-10', 'sold_price' => 14000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['vehicle_id' => 7, 'customer_id' => 1, 'dealer_id' => 1, 'sold_date' => '2023-07-08', 'sold_price' => 30000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['vehicle_id' => 8, 'customer_id' => 2, 'dealer_id' => 2, 'sold_date' => '2023-08-05', 'sold_price' => 17000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['vehicle_id' => 9, 'customer_id' => 3, 'dealer_id' => 3, 'sold_date' => '2023-09-12', 'sold_price' => 35000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['vehicle_id' => 10, 'customer_id' => 4, 'dealer_id' => 1, 'sold_date' => '2023-10-25', 'sold_price' => 32000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['vehicle_id' => 11, 'customer_id' => 5, 'dealer_id' => 2, 'sold_date' => '2023-11-19', 'sold_price' => 40000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['vehicle_id' => 12, 'customer_id' => 6, 'dealer_id' => 3, 'sold_date' => '2023-12-17', 'sold_price' => 45000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['vehicle_id' => 13, 'customer_id' => 1, 'dealer_id' => 1, 'sold_date' => '2023-11-15', 'sold_price' => 38000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['vehicle_id' => 14, 'customer_id' => 2, 'dealer_id' => 2, 'sold_date' => '2023-10-13', 'sold_price' => 33000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['vehicle_id' => 15, 'customer_id' => 3, 'dealer_id' => 3, 'sold_date' => '2023-09-11', 'sold_price' => 20000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['vehicle_id' => 16, 'customer_id' => 4, 'dealer_id' => 1, 'sold_date' => '2023-08-09', 'sold_price' => 21000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['vehicle_id' => 17, 'customer_id' => 5, 'dealer_id' => 2, 'sold_date' => '2023-07-07', 'sold_price' => 19000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['vehicle_id' => 18, 'customer_id' => 6, 'dealer_id' => 3, 'sold_date' => '2023-06-05', 'sold_price' => 24000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['vehicle_id' => 19, 'customer_id' => 1, 'dealer_id' => 1, 'sold_date' => '2023-05-03', 'sold_price' => 16000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['vehicle_id' => 20, 'customer_id' => 2, 'dealer_id' => 2, 'sold_date' => '2023-04-01', 'sold_price' => 15000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
```

##Custom Filtering and Sorting##
To add custom filters and sorting for vehicles by price and brand, you can modify the controller and views.

##Controller##
In your `VehicleController`, add methods for filtering and sorting.

```
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\Brand;

class VehicleController extends Controller
{
    public function index(Request $request)
    {
        $query = Vehicle::query();
        
        if ($request->has('brand')) {
            $query->where('brand_id', $request->brand);
        }

        if ($request->has('price_min')) {
            $query->where('price', '>=', $request->price_min);
        }

        if ($request->has('price_max')) {
            $query->where('price', '<=', $request->price_max);
        }

        if ($request->has('sort_by')) {
            $query->orderBy($request->sort_by, $request->sort_order ?? 'asc');
        }

        $vehicles = $query->get();
        $brands = Brand::all();

        return view('vehicles.index', compact('vehicles', 'brands'));
    }
}
```

##View##
In your `vehicles/index.blade.php` file, add a form for filtering and sorting.

```
@extends('layouts.app')

@section('content')
<div class="container">
    <form method="GET" action="{{ route('vehicles.index') }}">
        <div class="row">
            <div class="col-md-3">
                <select name="brand" class="form-control">
                    <option value="">Select Brand</option>
                    @foreach($brands as $brand)
                        <option value="{{ $brand->id }}" {{ request('brand') == $brand->id ? 'selected' : '' }}>{{ $brand->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-3">
                <input type="number" name="price_min" class="form-control" placeholder="Min Price" value="{{ request('price_min') }}">
            </div>
            <div class="col-md-3">
                <input type="number" name="price_max" class="form-control" placeholder="Max Price" value="{{ request('price_max') }}">
            </div>
            <div class="col-md-3">
                <select name="sort_by" class="form-control">
                    <option value="price" {{ request('sort_by') == 'price' ? 'selected' : '' }}>Sort by Price</option>
                </select>
                <select name="sort_order" class="form-control">
                    <option value="asc" {{ request('sort_order') == 'asc' ? 'selected' : '' }}>Ascending</option>
                    <option value="desc" {{ request('sort_order') == 'desc' ? 'selected' : '' }}>Descending</option>
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Filter</button>
    </form>

    <div class="row mt-4">
        @foreach($vehicles as $vehicle)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('storage/' . $vehicle->image) }}" class="card-img-top
```


