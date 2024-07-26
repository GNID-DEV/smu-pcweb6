# SMU PCWEB6: Intro to Front End Web Development with JavaScript

Welcome to the SMU PCWEB6 project! This repository focuses on front-end web development using JavaScript. The project allows you to create, read, update, and delete entries (such as blog posts or player profiles). Feel free to choose your own topic for this project!

## Project Specs

- **Functionality**: Implement a site where you can create, read, update, and delete entries.
- **JavaScript Requirements**:
  - **Animations**: Add jQuery or Animate.css animations to enhance user interaction. This could include animations when the page loads or when buttons are clicked.
  - **JavaScript Library**: Find and integrate a suitable JavaScript library to enhance your site's functionality. There are numerous libraries available to choose from.
- **Optional Enhancements**:
  - **Loading Messages**: Implement "Loading" messages that animate into and out of the page when triggered by user interaction.
  - **Weather API Integration**: Add functionality to display the current weather on your page using a weather API. This feature should load the weather information when a button is clicked.

## Getting Started

1. **Clone the Repository**:

   Clone the repository to your local machine using:

 ```bash
   gh repo clone YOUR_GITHUB_USERNAME/smu-pcweb6
 ```

2. **Install Dependencies**:

If you are using any libraries or frameworks, make sure to install them. For example:

  npm install jquery animate.css

Or include the libraries in your HTML via CDN:

 ```bash
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
```

3. **Setup Your Project**:

Create your HTML, CSS, and JavaScript files as needed. Implement the CRUD operations for your chosen topic.

4. **Implement Animations**:

Use jQuery or Animate.css to add animations. For example, you can animate elements when the page loads or when buttons are clicked.

 ```bash
$(document).ready(function() {
    // Example animation when the page loads
    $('.element').addClass('animate__animated animate__fadeIn');
});
```

5. **Enhance Your Site**:

- **JavaScript Library**: Integrate a library that suits your project needs.
- **Loading Messages**: Add animated loading messages for better user experience.

 ```bash
// Example loading message animation
$('#myButton').on('click', function() {
    $('#loadingMessage').fadeIn().delay(2000).fadeOut();
});
```

6. **Weather API Integration (Optional)**:

Use a weather API to fetch and display the current weather. Implement a button to trigger the API request.

Weather API Integration (Optional):

Use a weather API to fetch and display the current weather. Implement a button to trigger the API request.

# How to Use

1. **Clone the Repository**:

 ```bash
  gh repo clone GNID-DEV/smu-pcweb6
```

2. **Install Dependencies**:

  Follow the setup instructions to install any required dependencies.

3. **Run Your Project**:

  Open your index.html file in a browser to view and interact with your project.

## Contribution

Contributions to this project are welcome! If you have any suggestions, bug reports, or improvements, feel free to open an issue or submit a pull request.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for more details.

















