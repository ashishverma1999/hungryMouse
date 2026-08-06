# FoodWagon Theme Documentation

## Overview
**FoodWagon** (also referred to as `cloudkitchen` in package configuration) is a responsive, e-commerce, and business template created by the ThemeWagon team.

## Technology Stack
- **Templating**: [Pug](https://pugjs.org/) for HTML generation.
- **Styling**: [SCSS](https://sass-lang.com/) for CSS pre-processing.
- **Scripting**: JavaScript (bundled using Webpack and transpiled via Babel).
- **Task Runner**: [Gulp](https://gulpjs.com/) for automated development and build workflows.
- **UI Framework**: [Bootstrap 5.0.1](https://getbootstrap.com/).
- **Icons**: FontAwesome 5, Feather Icons.

## Project Structure
The repository is organized into the following key directories:

- **`src/`**: Contains all the source code for the project.
  - `pug/`: Pug templates used to generate the HTML files.
  - `scss/`: SCSS stylesheets.
  - `js/`: Source JavaScript files.
- **`public/`**: The output directory containing the compiled, ready-to-use static site (`index.html`, `assets`, `vendors`).
- **`gulp/`**: Contains individual Gulp task definitions (e.g., compiling pug, scripts, styles, watching files).
- **`build/`**: The directory generated for production builds.

## Available NPM Scripts
The project provides several scripts for development and deployment, defined in `package.json`:

- `npm start` - Starts the development environment, running the default Gulp task which includes compiling assets and watching for changes.
- `npm run dev` or `npm run compile` - Compiles all assets (styles, scripts, vendors, pug).
- `npm run build` - Creates a production-ready build of the template.
- `npm run build:test` - Creates a production build and watches for changes.
- `npm run deploy` - Deploys the project using `gh-pages` to the `live` branch.
- `npm run live` - Compiles all assets and runs the live deployment process.
- `npm run publish` - Pushes the `live` subtree to `gh-pages`.

## How to Run Locally
1. Ensure you have Node.js and npm installed.
2. Clone or download the repository.
3. Open your terminal and navigate to the root directory of the project:
   ```bash
   cd path/to/foodwagon_v1
   ```
4. Install dependencies and start the development server:
   ```bash
   npm install && gulp
   ```
   Or alternatively:
   ```bash
   npm install
   npm start
   ```

*Note: The `public` folder contains everything ready to use if you do not wish to use the Gulp-based workflow.*
