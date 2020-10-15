require('./bootstrap');

// Make 'Student Administration' accessible inside the HTML pages
import StudentAdministration from "./studentAdministration";
window.StudentAdministration = StudentAdministration;
// Run the hello() function
StudentAdministration.hello();
