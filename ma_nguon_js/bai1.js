function palindrome(str) {
    let arr = str.toLowerCase().split(/[\W_-]/)
    arr = arr.join("").split('')
    console.log(arr)
    let n = arr.length
    for(let i = 0; i < (n + 1)/ 2; i++) {
      if(arr[i] != arr[n - i - 1]) return false
  
    }
    return true;
  }
  
  console.log(palindrome("0_0 (: /-\ :) 0-0"));