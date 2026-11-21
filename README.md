# College Academics Calculator

A web-based academic utility project built with HTML, CSS, JavaScript and PHP.

## Project overview
The repository combines a browser-facing interface with a PHP endpoint for handling submitted student details. It demonstrates form handling and server-side file persistence.

## Technology stack
- HTML5 and CSS3
- JavaScript
- PHP

## Run locally
1. Install PHP 8 or a compatible version.
2. Clone the repository.
3. Start a local PHP server from the project directory:
   ```bash
   php -S localhost:8000
   ```
4. Open `http://localhost:8000` in your browser.
5. Test form submission only with sample data.

## Current implementation notes
The inspected `store_data.php` endpoint accepts POST fields and appends tab-separated records to a file named `student_details.xlsx`. Despite that filename, the shown implementation writes plain text/TSV data, not a valid Excel workbook.

## Security and data handling
Do not use the current file-writing approach for real student records without additional safeguards. Add server-side validation, authentication/authorization, CSRF protection, safe file permissions, concurrent-write handling, privacy/retention rules and spreadsheet-formula injection protection. Avoid collecting real personal information in a public demo.

## Future improvements
- Use a real database or a proper XLSX library.
- Validate email, mobile number and passing year on the server.
- Add automated tests for invalid and duplicate submissions.
- Document the academic calculations and their formulas.

## Project status
Learning project; not production-ready for personal or educational records without the safeguards above.
