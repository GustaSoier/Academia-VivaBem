/*--------------------------------------------------
    BMI Calculator
---------------------------------------------------*/
function calculateBMI(){
    var weight = document.bmiCalc.weight.value
    var height = document.bmiCalc.height.value
    
    if(weight > 0 && height > 0){
        var finalBmi = (weight/(height*height))*703;
        document.bmiCalc.bmi.value = new Number(finalBmi).toFixed(2)
        
        if(finalBmi < 18.5){
            document.bmiCalc.meaning.value = "Underweight BMI"
        }
        
        if(finalBmi > 18.5 && finalBmi < 25){
            document.bmiCalc.meaning.value = "Normal BMI"
        }
        
        if(finalBmi > 25 && finalBmi < 30){
            document.bmiCalc.meaning.value = "Overweight BMI"
        }
        
        if(finalBmi > 30 && finalBmi < 35){
            document.bmiCalc.meaning.value = "Obese BMI"
        }
        
        if(finalBmi > 35){
            document.bmiCalc.meaning.value = "Extremely Obese BMI"
        }
        
    }else{
        alert ("Please fill in all fields.")
    }
}