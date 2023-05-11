function convertToRoman(num) {
    let romanNumer = ['M', 'CM', 'D', 'CD', 'C', 'XC', 'L', 'XL', 'X', 'IX', 'V', 'IV', 'I']
    let romanVal = [1000, 900, 500, 400, 100, 90, 50, 40, 10, 9, 5, 4, 1]
     let freq = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0 ,0]
   
     while( num != 0 ) {
   
       for(let i = 0; i < romanVal.length; i++) {
         console.log(num)
         if(num / romanVal[i] >= 1) {
           freq[i]++;
           num -= romanVal[i]
           break
       }
     }
     
   }
   
   console.log(freq)
   let result = ''
     for(let i = 0; i < romanVal.length; i++) {
       for(let j = 0; j < freq[i]; j++) {
         result += romanNumer[i]
       }
     }
   console.log(result)
   return result
   }
   convertToRoman(36);