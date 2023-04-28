let seatsLeft = 10;
let passengersStillToBoard = 8;
let passengersBoarded = 0;
let message = "";

while (seatsLeft > 0 && passengersStillToBoard > 0) {
    passengersBoarded++; // un passager embarque
    message = "Un passager embarque";
    passengersStillToBoard--; // donc il y a un passager de moins à embarquer
    message += " donc il y a un passager de moins à embarquer ";
    seatsLeft--; // et un siège de moins
    message += "et un siège de moins."
    console.log(message + " Passagers restants : " + passengersStillToBoard + " Sièges libres : " + seatsLeft);
}

console.log("Passagers ayant embarqué : " + passengersBoarded); // imprime 8, car il y a 8 passagers pour 10 sièges