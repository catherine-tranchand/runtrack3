function isLeapYear(Year){
    return (((Year & 3) == 0) && ((Year % 100 != 0)) || ((Year % 400 == 0)));
}

