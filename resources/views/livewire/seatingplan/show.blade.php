<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        .clicked {
            background-color: green;
        }
    </style>
</head>
<body>
<section class="relative py-16 bg-blueGray-50">

<div class="w-full  bg-slate-900">
    <div class="text-center text-red-500 font-semibold text-3xl hover:text-red-300">
        Choose Your Seats!
    </div>
<div class="grid mx-8 w-full h-screen place-items-center">
<div class="flex ">
 <div class="mx-4 ">
    <label class="leading-8 mx-2  text-slate-100" for="">A</label><br>
    <label class="leading-10 mx-2 text-slate-100" for="">B</label><br>
    <label class="leading-10 mx-2 text-slate-100" for="">C</label><br>
    <label class="leading-12 mx-2 text-slate-100" for="">D</label><br>
    <label class="leading-10 mx-2 text-slate-100" for="">E</label><br>
    <label class="leading-8 mx-2 text-slate-100" for="">F</label><br>
    <label class="leading-8 mx-2 text-slate-100" for="">G</label><br>
    <label class="leading-10 mx-2 text-slate-100" for="">H</label><br>
    <label class="leading-10 mx-2 text-slate-100" for="">I</label><br>
    <label class="leading-12 mx-2 text-slate-100" for="">J</label><br>
 </div>
 
  <div x-data="{ count1: 0, count2: 0, count3: 0,count4:0, count5:0,count6: 0,count7: 0,count8: 0,count9: 0,count10: 0,count11: 0,count12: 0,count13: 0,count14: 0,count15:0,count16:0,count17:0,count18:0,count19:0,count20:0,
    count21:0,count22:0,count23:0,count24:0,count25:0,count26:0,count27:0,count28:0,count29:0,count30:0,count31:0,count32:0,count33:0,count34:0,count35:0,count36:0,count37:0,count38:0,count39:0,count40:0,
    count41:0,count42:0,count43:0,count44:0,count45:0,count46:0,count47:0,count48:0,count49:0,count50:0,count51:0,count52:0,count53:0,count54:0,count55:0,count56:0,count57:0,count58:0,count59:0,count60:0,count61:0,count62:0,
    count63:0,count64:0,count65:0,count66:0,count67:0,count68:0,count69:0,count70:0,count71:0,count72:0,count73:0,count74:0,count75:0,count76:0,count77:0,count78:0,count79:0,count80:0,count81:0,count82:0,count83:0,
    count84:0,count85:0,count86:0,count87:0,count88:0,count89:0,count90:0,count91:0,
    count92:0,count93:0,count94:0,count95:0,count96:0,count97:0,count98:0,count99:0,count100:0,total: 0, clicked1: false, clicked2: false, clicked3: false ,clicked4: false,clicked5: false,clicked6: false,clicked7: false,clicked8: false,clicked9: false,clicked10: false,clicked11: false,clicked12: false,clicked13: false,clicked14: false,clicked15: false,clicked16: false,clicked17: false,clicked18: false,clicked19: false,clicked20: false,
    clicked21: false,clicked22: false,clicked23: false,clicked24: false,clicked25: false,clicked26: false,clicked27: false,clicked28: false,clicked29: false,clicked30: false,clicked31: false,
    clicked33: false,clicked32: false,clicked34: false,clicked35: false,clicked36: false,clicked37: false,clicked38: false,clicked39: false,clicked40: false,clicked41: false,clicked42: false,
    clicked43: false,clicked44: false,clicked45: false,clicked46: false,clicked47: false,clicked48: false,clicked49: false,clicked50: false,clicked51: false,clicked52: false,clicked53: false,
    clicked54: false,clicked55: false,clicked56: false,clicked57: false,clicked58: false,clicked59: false,clicked60: false,clicked61: false,clicked62: false,clicked63: false,clicked64: false,
    clicked65: false,clicked66: false,clicked67: false,clicked68: false,clicked69: false,clicked70: false,clicked71: false,clicked72: false,clicked73: false,clicked74: false,clicked75: false,
    clicked76: false,clicked77: false,clicked78: false,clicked79: false,clicked80: false,clicked81: false,clicked82: false,clicked83: false,clicked84: false,clicked85: false,clicked86: false,
    clicked87: false,clicked88: false,clicked89: false,clicked90: false,clicked91: false,clicked92: false,clicked93: false,clicked94: false,clicked95: false,clicked96: false,clicked97: false,clicked98: false,clicked99: false,clicked100: false,
        }">
        <button class=" px-2 rounded hover:bg-green-500 bg-white w-10 text-black" :class="{ 'clicked': clicked1 }" @click="count1++; total++; clicked1 = true">A1</button>
        
        <button class=" px-2 rounded bg-white hover:bg-green-500 w-10 text-black" :class="{ 'clicked': clicked2 }" @click="count2++; total++; clicked2 = true">A2</button>
        
        <button class=" px-2 rounded bg-white hover:bg-green-500 w-10 text-black" :class="{ 'clicked': clicked3 }" @click="count3++; total++; clicked3 = true">A3</button>
        <button class=" px-2 rounded bg-white hover:bg-green-500 w-10 text-black" :class="{ 'clicked': clicked4 }" @click="count4++; total++; clicked4 = true">A4</button>
        <button class=" px-2 rounded bg-white hover:bg-green-500 w-10 text-black" :class="{ 'clicked': clicked5 }" @click="count5++; total++; clicked5 = true">A5</button>
        <button class=" px-2 rounded bg-white hover:bg-green-500 w-10 text-black" :class="{ 'clicked': clicked6 }" @click="count6++; total++; clicked6 = true">A6</button>
        
        <button class=" px-2 rounded bg-white hover:bg-green-500 w-10 text-black" :class="{ 'clicked': clicked7 }" @click="count7++; total++; clicked7 = true">A7</button>
        
        <button class=" px-2 rounded bg-white  hover:bg-green-500 w-10 text-black" :class="{ 'clicked': clicked8 }" @click="count8++; total++; clicked8 = true">A8</button>
        <button class="bg-white text-black hover:bg-green-500 w-10 px-2 rounded " :class="{ 'clicked': clicked9 }" @click="count9++; total++; clicked9 = true">A9</button>
        <button class=" px-2 rounded bg-white hover:bg-green-300 w-10 text-black" :class="{ 'clicked': clicked10 }" @click="count10++; total++; clicked10 = true">A10</button>
        <br>
        <hr class="w-full my-2">
        <button class="bg-white my-2 px-2 rounded w-10 text-black" :class="{ 'clicked': clicked11 }" @click="count11++; total++; clicked11 = true">B1</button>
        <button class="bg-white px-2 rounded w-10 text-black" :class="{ 'clicked': clicked12 }" @click="count12++; total++; clicked12 = true">B2</button>
        <button class="bg-white px-2 rounded w-10 text-black" :class="{ 'clicked': clicked13 }" @click="count13++; total++; clicked13 = true">B3</button>
        <button class="bg-white px-2 rounded w-10 text-black" :class="{ 'clicked': clicked14 }" @click="count14++; total++; clicked14 = true">B4</button>
        <button class="bg-white px-2 rounded w-10 text-black" :class="{ 'clicked': clicked15 }" @click="count15++; total++; clicked15 = true">B5</button>
        <button class="bg-white px-2 rounded w-10 text-black" :class="{ 'clicked': clicked16 }" @click="count16++; total++; clicked16 = true">B6</button>
        <button class="bg-white px-2 rounded w-10 text-black" :class="{ 'clicked': clicked17 }" @click="count17++; total++; clicked17 = true">B7</button>
        <button class="bg-white px-2 rounded w-10 text-black" :class="{ 'clicked': clicked18 }" @click="count18++; total++; clicked18 = true">B8</button>
        <button class="bg-white px-2 rounded w-10 text-black" :class="{ 'clicked': clicked19 }" @click="count19++; total++; clicked19 = true">B9</button>
        <button class="bg-white px-2 rounded w-10 text-black" :class="{ 'clicked': clicked20 }" @click="count20++; total++; clicked20 = true">B10</button>
        <br>
        <button class="bg-white px-2 rounded w-10 text-black" :class="{ 'clicked': clicked21 }" @click="count21++; total++; clicked21= true">C1</button>
        <button class="bg-white px-2 rounded w-10 text-black" :class="{ 'clicked': clicked22 }" @click="count22++; total++; clicked22 = true">C2</button>
        <button class="bg-white px-2 rounded w-10 text-black" :class="{ 'clicked': clicked23 }" @click="count23++; total++; clicked23 = true">C3</button>
        <button class="bg-white px-2 rounded w-10 text-black" :class="{ 'clicked': clicked24 }" @click="count24++; total++; clicked24= true">C4</button>
        <button class="bg-white px-2 rounded w-10 text-black" :class="{ 'clicked': clicked25 }" @click="count25++; total++; clicked25 = true">C5</button>
        <button class="bg-white px-2 rounded w-10 text-black" :class="{ 'clicked': clicked26 }" @click="count26++; total++; clicked26 = true">C6</button>
        <button class="bg-white px-2 rounded w-10 text-black" :class="{ 'clicked': clicked27 }" @click="count27++; total++; clicked27 = true">C7</button>
        <button class="bg-white px-2 rounded w-10 text-black" :class="{ 'clicked': clicked28 }" @click="count28++; total++; clicked28 = true">C8</button>
        <button class="bg-white px-2 rounded w-10 text-black" :class="{ 'clicked': clicked29 }" @click="count29++; total++; clicked29 = true">C9</button>
        <button class="bg-white px-2 rounded w-10 text-black" :class="{ 'clicked': clicked30 }" @click="count30++; total++; clicked30 = true">C10</button>
        <br>
        
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked31 }" @click="count31++; total++; clicked31 = true">D1</button>
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked32 }" @click="count32++; total++; clicked32 = true">D2</button>
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked33 }" @click="count33++; total++; clicked33 = true">D3</button>
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked34 }" @click="count34++; total++; clicked34 = true">D4</button>
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked35 }" @click="count35++; total++; clicked35 = true">D5</button>
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked36 }" @click="count36++; total++; clicked36 = true">D6</button>
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked37 }" @click="count37++; total++; clicked37 = true">D7</button>
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked38 }" @click="count38++; total++; clicked38 = true">D8</button>
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked39 }" @click="count39++; total++; clicked39 = true">D9</button>
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked40 }" @click="count40++; total++; clicked40 = true">D10</button>
        <br>
        
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked41 }" @click="count41++; total++; clicked41 = true">E1</button>
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked42 }" @click="count42++; total++; clicked42 = true">E2</button>
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked43 }" @click="count43++; total++; clicked43 = true">E3</button>
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked44 }" @click="count44++; total++; clicked44 = true">E4</button>
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked45 }" @click="count45++; total++; clicked45 = true">E5</button>
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked46 }" @click="count46++; total++; clicked46 = true">E6</button>
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked47 }" @click="count47++; total++; clicked47 = true">E7</button>
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked48 }" @click="count48++; total++; clicked48 = true">E8</button>
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked49 }" @click="count49++; total++; clicked49 = true">E9</button>
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked50 }" @click="count50++; total++; clicked50 = true">E10</button>
        <br>
        
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked51 }" @click="count51++; total++; clicked51 = true">F1</button>
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked52 }" @click="count52++; total++; clicked52 = true">F2</button>
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked53 }" @click="count53++; total++; clicked53 = true">F3</button>
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked54 }" @click="count54++; total++; clicked54 = true">F4</button>
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked55 }" @click="count55++; total++; clicked55 = true">F5</button>
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked56 }" @click="count56++; total++; clicked56 = true">F6</button>
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked57 }" @click="count57++; total++; clicked57 = true">F7</button>
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked58 }" @click="count58++; total++; clicked58 = true">F8</button>
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked59 }" @click="count59++; total++; clicked59 = true">F9</button>
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked60 }" @click="count60++; total++; clicked60 = true">F10</button>
        <br>
       
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked61 }" @click="count61++; total++; clicked61 = true">G1</button>
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked62 }" @click="count62++; total++; clicked62 = true">G2</button>
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked63 }" @click="count63++; total++; clicked63 = true">G3</button>
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked64 }" @click="count64++; total++; clicked64 = true">G4</button>
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked65 }" @click="count65++; total++; clicked65 = true">G5</button>
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked66 }" @click="count66++; total++; clicked66 = true">G6</button>
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked67 }" @click="count67++; total++; clicked67 = true">G7</button>
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked68 }" @click="count68++; total++; clicked68 = true">G8</button>
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked69 }" @click="count69++; total++; clicked69 = true">G9</button>
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked70 }" @click="count70++; total++; clicked70 = true">G10</button>
        <br>
        
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked71 }" @click="count71++; total++; clicked71 = true">H1</button>
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked72 }" @click="count72++; total++; clicked72 = true">H2</button>
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked73 }" @click="count73++; total++; clicked73 = true">H3</button>
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked74 }" @click="count74++; total++; clicked74 = true">H4</button>
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked75 }" @click="count75++; total++; clicked75 = true">H5</button>
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked76 }" @click="count76++; total++; clicked76 = true">H6</button>
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked77 }" @click="count77++; total++; clicked77 = true">H7</button>
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked78 }" @click="count78++; total++; clicked78 = true">H8</button>
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked79 }" @click="count79++; total++; clicked79 = true">H9</button>
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked80 }" @click="count80++; total++; clicked80 = true">H10</button>
        <br>
        <hr class="w-full my-2">
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked81 }" @click="count81++; total++; clicked81 = true">I1</button>
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked82 }" @click="count82++; total++; clicked82 = true">I2</button>
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked83 }" @click="count83++; total++; clicked83 = true">I3</button>
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked84 }" @click="count84++; total++; clicked84 = true">I4</button>
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked85 }" @click="count85++; total++; clicked85 = true">I5</button>
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked86 }" @click="count86++; total++; clicked86 = true">I6</button>
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked87 }" @click="count87++; total++; clicked87 = true">I7</button>
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked88 }" @click="count88++; total++; clicked88 = true">I8</button>
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked89 }" @click="count89++; total++; clicked89 = true">I9</button>
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked90 }" @click="count90++; total++; clicked90 = true">I10</button>
        <br>
        
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked91 }" @click="count91++; total++; clicked91 = true">J1</button>
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked92 }" @click="count92++; total++; clicked92 = true">J2</button>
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked93 }" @click="count93++; total++; clicked93 = true">J3</button>
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked94 }" @click="count94++; total++; clicked94 = true">J4</button>
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked95 }" @click="count95++; total++; clicked95 = true">J5</button>
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked96 }" @click="count96++; total++; clicked96 = true">J6</button>
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked97 }" @click="count97++; total++; clicked97 = true">J7</button>
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked98 }" @click="count98++; total++; clicked98 = true">J8</button>
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked99 }" @click="count99++; total++; clicked99 = true">J9</button>
        <button class="bg-white px-2 rounded mt-2 w-10 text-black" :class="{ 'clicked': clicked100}" @click="count100++; total++;clicked100 = true">J10</button>
        <br>
        <br>
        <p class="my-2 text-red-500">Total number of seats: <span x-text="total"></span></p>
        <p class="text-red-500 my-0">Total Price: <span x-text="total*8000"></span>Ks</p>
        
    </div>
  </div>
  <button wire:click="goToBooking" class="h-10 px-6 font-semibold rounded-md bg-red-600 text-white hover:bg-red-300">Book Now</button>
  
</div>

</section>
</body>
</html>


