	function convertToWord(price){

		let numberFormat = {
			1:["BİR","ON"],
			2:["İKİ","İYİRMİ"],
			3:["ÜÇ","OTUZ"],
			4:["DÖRD","QIRX"],
			5:["BEŞ","ƏLLİ"],
			6:["ALTI","ALTMIŞ"],
			7:["YEDDİ","YETMİŞ"],
			8:["SƏKKİZ","SƏKSƏN"],
			9:["DOQQUZ","DOXSAN"]
		};

		let strArr =[];
		for(let i=price.length-1,t=0; i>=0; i--,t++)
		{
			if(price[0]==0){
				return "SIFIR";
			}
			if (t===0) {

				strArr.push(price[i]==0?"":numberFormat[price[i]][0]);

			}else if(t===1)
			{
				strArr.push(price[i]==0?"":numberFormat[price[i]][1]);
			}else if(t===2)
			{
				if(price[i]>0) {
					strArr.push("YÜZ");
				}
				if(price[i]!=1){
					strArr.push(price[i]==0?"":numberFormat[price[i]][0])+" ";
				}
			}else if(t===3)
			{
				if(!(price[i]==0 && price[i-1]==0 && price[i-2]==0)){
					strArr.push("MİN");
				}

				if(price[i]!=1){
					strArr.push(price[i]==0?"":numberFormat[price[i]][0])+" ";
				}
			}
			else if(t===4)
			{
				strArr.push(price[i]==0?"":numberFormat[price[i]][1])+" ";

			}
			else if(t===5)
			{
				if(price[i]>0) {
					strArr.push("YÜZ");
				}
				if(price[i]!=1){
					strArr.push(price[i]==0?"":numberFormat[price[i]][0])+" ";
				}
			}else if(t===6)
			{
				strArr.push("MİLYON");
				strArr.push(price[i]==0?"":numberFormat[price[i]][0])+" ";

			}
			else if(t===7)
			{
				strArr.push(price[i]==0?"":numberFormat[price[i]][1])+" ";
			}
		}

		return strArr.reverse().join(" ");
	}
