const value=(id)=>{
    return document.getElementById(id).value
}
const calculation=()=>{
let price=value("price")
let perDayMilk=value("perDayMilk")
let perMonthMilk=value("days")
let additionalMilk=value("additionalMilk")
let fewerMilk=value("fewerMilk")
let priceOfMilkInMonth=price*perDayMilk*perMonthMilk
let addedPrice=price*additionalMilk
let fewerPrice=price*fewerMilk
let total=priceOfMilkInMonth+addedPrice-fewerPrice
document.getElementById('result').innerHTML=`${total} Rs`
}
document.getElementById("btn").onclick=function(){calculation()}