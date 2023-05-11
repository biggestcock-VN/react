function rot13(str) {
    let arr = str.split('')
    let tempCode
    for(let i = 0; i < arr.length; i++) {
      if(arr[i] >= 'A' && arr[i] <= 'Z') {
        tempCode = arr[i].charCodeAt(0)
        if(tempCode - 13 >= 65) tempCode -= 13
        else{
          tempCode = 90 + (tempCode - 13-65) + 1
        }  
        arr[i] = String.fromCharCode(tempCode)
      }
    }
  
    return arr.join('');
    
  }
  
  rot13("SERR PBQR PNZC");