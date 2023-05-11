function checkCashRegister(price, cash, cid) {
    let change;
  
    let currency = {
      0.01: 'PENNY',
      0.05: 'NICKEL',
      0.1 : 'DIME',
      0.25: 'QUARTER',
      1   : 'ONE',
      5   : 'FIVE',
      10  : 'TEN',
      20  : 'TWENTY'
    }
    let currency2 ={
      'ONE HUNDRED': 100,
      'TWENTY' : 20,
      'TEN': 10,
      'FIVE': 5,
      'ONE' : 1,
      'QUARTER': 0.25,
      'DIME' : 0.1,
      'NICKEL': 0.05,
      'PENNY': 0.01
    }
  
  
    let needToPay = Math.abs(cash - price)
    let money = [100, 20, 10, 5, 1, 0.25, 0.1, 0.05, 0.01]
    let remaining = cid.map(element => Math.round(element[1]/currency2[element[0]])).reverse()
    let original = [...remaining]
    console.log(remaining)
  
    let result = [0, 0, 0, 0, 0, 0, 0, 0, 0]
    let canCharge = true
    if(cash < price) canCharge = false
  
  
    let count = 0
    while (needToPay > 0) {
      let temp = needToPay
      for(let i = 0; i < money.length; i++) {
        if(needToPay / money[i] >= 0.99 && remaining[i] > 0) {
          result[i]++;
          remaining[i]--;
          needToPay -= money[i];
          break
        }
        if(i == money.length - 1) count++
      }
       if(needToPay < 0) break;
       if(count == 20) {
         canCharge = false
         break
      }
    }
  let sum = 0
   for(let i = 0; i < remaining.length; i++) {
     console.log(original[i])
     sum += original[i] * money[i]
   }
   console.log(sum)
  
  
  let res = []
  console.log(needToPay) 
  if(canCharge) {
    if(sum == cash - price) return {status: "CLOSED", change: cid}
    for(let i = 0; i < result.length; i++) {
      if(result[i] != 0)
      res.push([Object.keys(currency2)[i], result[i] * money[i]])
    }
    return {status: "OPEN", change: res}
  }
  
  else {
    return {status: "INSUFFICIENT_FUNDS", change: []}
  }
  // res.push([Object.kesys(currency2)[5], result[5] * money[5]])
  console.log(res)
  
  
  
  }
  
  console.log(checkCashRegister(19.5, 20, [["PENNY", 0.5], ["NICKEL", 0], ["DIME", 0], ["QUARTER", 0], ["ONE", 0], ["FIVE", 0], ["TEN", 0], ["TWENTY", 0], ["ONE HUNDRED", 0]]));