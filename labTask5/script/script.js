console.log("Connected");
function analyzeText() {
    const text = document.getElementById("textInput").value;
    const errorMsg = document.getElementById("errorMsg");

    // Empty check
    if (text.trim() == "") {
        errorMsg.innerHTML = "Please enter some text!";
        return;
    }

    errorMsg.innerHTML = "";

    // Character count
    let characters = text.length;

    // Word count 
    let words = text.trim().split().length;

    // Reverse text
    let reversed = text.split("").reverse().join("");

    // Show result
    document.getElementById("charCount").innerHTML = characters;
    document.getElementById("wordCount").innerHTML = words;
    document.getElementById("reversedText").innerHTML = reversed;
}