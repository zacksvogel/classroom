window.onload = function() {
    function a() {
        this.simulateClock = !1;
        this.simulateClockInterval = 3 * a.MSEC_IN_SEC;
        this.currentSeconds = this.currentMinutes = this.currentHours = this.updateInterval = 0;
        this.clockWords = null
    }
    a.CLOCK_MULTIPLE_OF_NUM = 5;
    a.SEC_IN_MIN = a.MIN_IN_HR = 60;
    a.MSEC_IN_SEC = 1E3;
    a.TWELVE_HOUR_CLOCK_FORMAT = 12;
    a.TWENTY_FOUR_HOUR_CLOCK_FORMAT = 24;
    a.prototype.generateClock = function() {
        !0 === this.simulateClock && (a.prototype._clockSimulator = e._generateClockSimulator(new Date));
        this.clockWords = {
            minuteWords: {
                values: ["quarter",
                    "twenty", "five", "half", "ten"
                ],
                prefix: "mm_"
            },
            specWords: {
                values: ["to", "past", "oclock"],
                prefix: "sw_"
            },
            hourWords: {
                values: "twelve one two three four five six seven eight nine ten eleven".split(" "),
                prefix: "hh_"
            }
        };
        for (var b in this.clockWords)
            if (this.clockWords.hasOwnProperty(b)) {
                var c = this.clockWords[b].values,
                    d, f;
                for (f in c) c.hasOwnProperty(f) && (d = document.getElementById(this.clockWords[b].prefix + c[f]), d.className = "clockWordDisabled")
            }
        this._updateClock()
    };
    a.prototype._updateClock = function() {
        var b = [],
            c = this.simulateClock ? this._clockSimulator() : new Date;
        this.currentSeconds = c.getSeconds();
        this.currentMinutes = c.getMinutes();
        this.currentHours = c.getHours()-5;
        0 !== this.currentMinutes % a.CLOCK_MULTIPLE_OF_NUM ? this._adjustClock() : this.updateInterval = a.CLOCK_MULTIPLE_OF_NUM * a.SEC_IN_MIN * a.MSEC_IN_SEC;
        this._resetClock();
        30 < this.currentMinutes ? (this.currentHours++, this.currentMinutes = a.MIN_IN_HR - this.currentMinutes, 0 !== this.currentMinutes && b.push(document.getElementById("sw_to"))) : 0 < this.currentMinutes && b.push(document.getElementById("sw_past"));
        this.currentHours === a.TWENTY_FOUR_HOUR_CLOCK_FORMAT && (this.currentHours = 0);
        this.currentHours >= a.TWELVE_HOUR_CLOCK_FORMAT && (this.currentHours -= a.TWELVE_HOUR_CLOCK_FORMAT);
        b.push(document.getElementById("hh_" + this.clockWords.hourWords.values[this.currentHours]));
        switch (this.currentMinutes) {
            case 0:
                b.push(document.getElementById("sw_oclock"));
                break;
            case 5:
                b.push(document.getElementById("mm_five"));
                break;
            case 10:
                b.push(document.getElementById("mm_ten"));
                break;
            case 15:
                b.push(document.getElementById("mm_quarter"));
                break;
            case 20:
                b.push(document.getElementById("mm_twenty"));
                break;
            case 25:
                b.push(document.getElementById("mm_twenty"));
                b.push(document.getElementById("mm_five"));
                break;
            case 30:
                b.push(document.getElementById("mm_half"));
                break;
            default:
                throw Error("Invalid minutes");
        }
        for (c = 0; c < b.length; c++) b[c].className = "clockWordEnabled";
        b = this.simulateClock ? this.simulateClockInterval : this.updateInterval;
        window.setTimeout(this._updateClock.bind(this), b)
    };
    a.prototype._resetClock = function() {
        for (var b = document.getElementsByClassName("clockWordEnabled"),
                a = b.length - 1; 0 <= a; a--) b[a].className = "clockWordDisabled"
    };
    a.prototype._adjustClock = function() {
        var b = this.currentMinutes % a.CLOCK_MULTIPLE_OF_NUM;
        0 !== b ? (this.currentMinutes = 3 > b ? this.currentMinutes - b : this.currentMinutes + (a.CLOCK_MULTIPLE_OF_NUM - b), this.updateInterval = ((a.CLOCK_MULTIPLE_OF_NUM - b) * a.SEC_IN_MIN - this.currentSeconds) * a.MSEC_IN_SEC) : this.updateInterval = a.CLOCK_MULTIPLE_OF_NUM * a.SEC_IN_MIN * a.MSEC_IN_SEC
    };
    a.prototype._generateClockSimulator = function(b) {
        var c = b.getHours(),
            d = b.getMinutes();
        return function() {
            d +=
                a.CLOCK_MULTIPLE_OF_NUM;
            c < a.TWENTY_FOUR_HOUR_CLOCK_FORMAT ? d >= a.MIN_IN_HR && (d = 0, c++) : d = c = 0;
            b.setHours(c);
            b.setMinutes(d);
            return b
        }
    };
    var e = new a;
    e.simulateClock = !1;
    e.generateClock()
};