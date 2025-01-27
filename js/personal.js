let allpic = document.querySelectorAll("#table-container table tbody tr td img");
console.log(allpic);
let green="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/Green_tick.svg/600px-Green_tick.svg.png";
let late="https://www.piprd.com/cdn/shop/products/12InchYellowRoundedAngleEnhancedYellow_1024x1024.png?v=1660679448";
Array.from(allpic).forEach(function (item) {
    let c = 0;
    item.addEventListener
        ('click', function () {
            if (c == 0) {
                item.src = green;
                c++;
            }
            else if (c == 1) {
                item.src = late;
                c++;
            }
            else if (c == 2) {
                item.src = "https://www.freeiconspng.com/uploads/x-png-22.png";
                c++;
            }
            else if (c == 3) {
                item.src = "https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Question_mark_alternate.png/640px-Question_mark_alternate.png";
                c=0;
            }
        })
})