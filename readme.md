# TourCMS API Integration Demo

This project was developed as part of a technical test, integrating the TourCMS API to display and manage tour listings. Although I am a junior developer, this project reflects my ability to work with external APIs, structure web projects, and create responsive interfaces.

The main objective of this application is to provide a simple interface for displaying tour information, enabling basic search functionality, and handling tour-related data using the TourCMS API.
## 🚀 Features

- Integration with TourCMS API
- Responsive tour listing display
- Tour search functionality
- Detailed tour information display
- Price display with currency support
- Tour booking capabilities
- Mobile-friendly interface
- Clean and modern UI design

## 📋 Prerequisites

Before you begin, ensure you have met the following requirements:

- PHP 7.4 or higher
- Composer installed
- TourCMS API credentials (marketplace ID, API key, and channel ID)

## 🔧 Installation

1. Clone the repository:
```bash
git clone https://github.com/MaryQuiroz/prueba_TourCMS.git
```

2. Install dependencies using Composer:
```bash
composer install
```

3. Create a `config.php` file with your TourCMS credentials:
```php
<?php
return [
    'marketplace_id' => 'your_marketplace_id',
    'api_key' => 'your_api_key',
    'channel_id' => 'your_channel_id'
];
```

## 🔌 Configuration

The application uses a configuration file (`config.php`) to manage API credentials. Ensure you have set up the following parameters:

- `marketplace_id`: Your TourCMS marketplace ID
- `api_key`: Your TourCMS API key
- `channel_id`: Your TourCMS channel ID

## 🖥️ Usage

1. Start your PHP server:
```bash
php -S localhost:8000
```

2. Access the application through your web browser:
```
http://localhost:8000
```

## 📚 API Integration

The application integrates with TourCMS using their official PHP SDK. Key features include:

- Tour search functionality
- Detailed tour information retrieval
- Tour booking management
- Price and availability checking

## 🎨 Frontend Features

The application includes a responsive frontend with:

- Clean and modern design
- Mobile-first approach
- Tour cards with images
- Pricing information
- Duration details
- Booking buttons
- Location information

## 🛠️ Technical Details

### Dependencies

- TourCMS PHP SDK (^4.0)
- PHP SimpleXML extension
- Modern web browser with JavaScript enabled

### File Structure

```
├── composer.json        # Composer dependencies
├── config.php          # Configuration file
├── index.php           # Main application file
├── tours.php           # Tour display template
└── readme.md           # Documentation
```

