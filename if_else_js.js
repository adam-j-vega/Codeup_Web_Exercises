// ignore these lines for now
// just know that the variable 'color' will end up with a random value from the colors array
var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
var color = colors[Math.floor(Math.random()*colors.length)];

var favorite = 'blue'; 

if (color=='red') {
	console.log('Blood is red \n');
} else if (color=='orange') {
	console.log('Orange is red and yellow \n');
} else if (color=='yellow') {
	console.log('Butter is yellow \n'); 
} else if (color=='green') {
	console.log('Green is not a creative color. \n')
} else if (color=='blue') {
	console.log('Uranus is blue \n');
} else {
	console.log('I do not know anything about that color \n');
}

// color ('blue') ? console.log("This is my favorite color. \n") : console.log("I hate this color. \n");

console.log(color);

if (color == 'blue') {
	console.log("This is my favorite color. \n");
	}
else {
	console.log("I hate this color. \n");
}

// todo, change this to your favorite color from the list

// todo: Create a block of if/else statements to check for every color except indigo and violet.
// todo: When a color is encountered log a message that tells the color, and an object of that color.
//       Example: Blue is the color of the sky.

// todo: Have a final else that will catch indigo and violet.
// todo: In the else, log: I do not know anything by that color.

// todo: Using the ternary operator, conditionally log a statement that
//       says whether the random color matches your favorite color.
