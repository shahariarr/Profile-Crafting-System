# Profile Crafting System

## Introduction
**Profile Crafting System** is a user-friendly platform designed to allow users to create personal profiles and portfolio websites without requiring any coding skills. By simply inputting their information, users can automatically generate a professional portfolio website and an industrial-grade CV, which can be used for career or job purposes.

**Live Project URL:** [Profile Crafting System](https://profile-crafting.infinityfreeapp.com)

## Table of Contents
- [Features](#features)
- [Technologies Used](#technologies-used)
- [Installation](#installation)
- [Configuration](#configuration)
- [Usage](#usage)
- [Project Outcome](#project-outcome)
- [Future Enhancements](#future-enhancements)
- [Contributors](#contributors)
- [License](#license)

## Features
- **User Registration and Login System:**
  - New user registration.
  - Login feature for existing users.
- **Dashboard:**
  - Input personal data such as name, age, nationality, and languages.
  - Input professional information, including education, experience, projects, and skills.
- **Portfolio Website Generation:**
  - Automatic generation of a complete portfolio website based on the provided information.
  - Option to share a profile URL.
- **Industrial CV Generation:**
  - Automatic generation of a professional CV based on the input data.
- **User-Friendly Interface:**
  - Easy navigation and usage.
- **Responsive Design:**
  - Optimized for both mobile and desktop platforms.
- **Secure Data Handling:**
  - Ensures user data is securely stored.

## Technologies Used
- **Frontend:**
  - HTML, CSS, JavaScript, Blade Templates
- **Backend:**
  - PHP, Laravel Framework
- **Database:**
  - MySQL
- **Hosting Platform:**
  - GitHub Pages (for the portfolio site)
- **Account Management:**
  - JWT Token Based Authentication

## Installation

### Prerequisites
- PHP >= 8.0
- Composer
- MySQL

### Steps

1. **Clone the repository:**
   ```bash
   git clone https://github.com/yourusername/profile-crafting-system.git
   cd profile-crafting-system
2. **Install dependencies:**
   ```bash
   composer install
   npm install
   npm run dev

3. **Environment setup:**
   ```bash
   cp .env.example .env
4. **Generate application key::**
   ```bash
   php artisan key:generate

5. **Run migrations:**
   ```bash
   php artisan migrate

6. **php artisan serve**
   ```bash 
   php artisan serve

### Configuration
**Database Configuration:**
Update your .env file with your database credentials:
   ```bash 
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database_name
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```
## Usage
1. **Register a new user** or **log in** with an existing account.
2. **Navigate to the dashboard** and input your personal and professional information.
3. **Generate your portfolio website** and share the generated URL with others.
4. **Download your CV** for job or career use.

## Project Outcome
The **Profile Crafting System** empowers users to create their profiles and portfolio websites without requiring any coding skills. The generated website and CV can be effectively used for career advancement and job applications. The project has been successfully completed and is now live, providing users with easy access to the service.

**Live Project URL:** [Profile Crafting System](https://profile-crafting-system.infinityfreeapp.com)

## Future Enhancements
- **Customization Options:** Adding more customization options for portfolio templates to allow users greater flexibility in designing their websites.
- **Social Media Integration:** Enabling integration with social media profiles to streamline the process of sharing and updating portfolio content.
- **Data Visualization:** Enhancing data visualization to provide users with analytics and insights into their profile and website performance.






















