alert("Hello World");
<script src="hello.js"></script>
var firstName = "Jane";                     // String type variable
var lastName = "Doe";                       // String type variable
var age = 35;                               // Number type variable
var married = true;                         // Boolean type variable
var childrenNames = ["Alice", "Bob"];       // Array type variable
var husband = { firstName: "John", lastName: "Doe", age: 35 }    
                                            // Object type variable
           function getFullName(firstName, lastName) {     // Function name
           return  firstName + " " + lastName;         // Returned value
            }

            var fullName = getFullName(firstName, lastName);   // Using variables
            var fullName = getFullName("Alice", "Doe");        // Using values
            if (isSettled) {
                document.write(fullName + " is settled.");
            } else {
                document.write(fullName + " is not settled.");
            }