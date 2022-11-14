function fib(n) {
    var fibSeq = [];
    fibSeq.push(n);
    fibSeq[0] === 0 ? fibSeq.push(1) : fibSeq.push(n);
    for (var i = 1; i <= 10; i++) {
        var nextNumber = fibSeq[i - 1] + fibSeq[i];
        fibSeq.push(nextNumber);
    }
    return fibSeq;
}
console.log(fib(0));
console.log(fib(12));
