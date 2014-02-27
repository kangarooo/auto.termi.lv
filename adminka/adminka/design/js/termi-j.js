	String.prototype.trim = function() {
		return this.replace(/^\s+/, '')
							 .replace(/\s+$/, '');
	};
	String.prototype.escape_html = function() {
		return this.replace(/&/g, "&amp;")
							 .replace(/</g, "&lt;")
							 .replace(/>/g, "&gt;")
							 .replace(/"/g, "&quot;");
  };
  String.prototype.create_domain = function(){
        var def='-';
        var code_set = new Array ();
        code_set[92] = def;  // \
        code_set[91] = def;  //  [
        code_set[93] = def;  //  ]
        code_set[94] = def;  // ^
        code_set[96] = def;  // `
        // Latvian 
        code_set[275] = "e";  code_set[274] = "e"; 
        code_set[363] = "u";  code_set[362] = "u"; 
        code_set[299] = "i";  code_set[298] = "i"; 
        code_set[257] = "a";  code_set[256] = "a"; 
        code_set[353] = "s";  code_set[352] = "s"; 
        code_set[291] = "g";  code_set[290] = "g"; 
        code_set[311] = "k";  code_set[310] = "k"; 
        code_set[316] = "l";  code_set[315] = "l"; 
        code_set[382] = "z";  code_set[381] = "z"; 
        code_set[269] = "c";  code_set[268] = "c"; 
        code_set[326] = "n";  code_set[325] = "n"; 
        // Russian
        code_set[1081] = "i";  code_set[1049] = "I";
        code_set[1094] = "c";  code_set[1062] = "C";
        code_set[1091] = "u";  code_set[1059] = "U";
        code_set[1082] = "k";  code_set[1050] = "K";
        code_set[1077] = "e";  code_set[1045] = "E";
        code_set[1085] = "n";  code_set[1053] = "N";
        code_set[1075] = "g";  code_set[1043] = "G";
        code_set[1096] = "s";  code_set[1064] = "S";
        code_set[1097] = "s";  code_set[1065] = "S";
        code_set[1079] = "z";  code_set[1047] = "Z";
        code_set[1093] = "h";  code_set[1061] = "H";
        code_set[1098] = "";   code_set[1066] = "";
        code_set[1092] = "f";  code_set[1060] = "F";
        code_set[1099] = "i";  code_set[1067] = "I";
        code_set[1074] = "v";  code_set[1042] = "V";
        code_set[1072] = "a";  code_set[1040] = "A";
        code_set[1087] = "p";  code_set[1055] = "P";
        code_set[1088] = "r";  code_set[1056] = "R";
        code_set[1086] = "o";  code_set[1054] = "O";
        code_set[1083] = "l";  code_set[1051] = "L";
        code_set[1076] = "d";  code_set[1044] = "D";
        code_set[1078] = "z";  code_set[1046] = "Z";
        code_set[1101] = "e";  code_set[1069] = "E";
        code_set[1103] = "a";  code_set[1071] = "A";
        code_set[1095] = "c";  code_set[1063] = "C";
        code_set[1089] = "s";  code_set[1057] = "S";
        code_set[1084] = "m";  code_set[1052] = "M";
        code_set[1080] = "i";  code_set[1048] = "I";
        code_set[1090] = "t";  code_set[1058] = "T";
        code_set[1100] = "";   code_set[1068] = "";
        code_set[1073] = "b";  code_set[1041] = "B";
        code_set[1102] = "u";  code_set[1070] = "U";
        newName='';
        var s='';
        var sp='';
        var c=0;
        for (i=0;i<this.length;i++){
            c=this.charCodeAt(i);
            if (code_set[c]){
                s=code_set[c];
            } else {
                if (c<48 || (c>57 && c<65) || c>122) {
                    s=def;
                } else {
                    s=this.charAt(i)
                }
            }
            if(s!==''&&!((sp==def | sp=='')&&s==def)){
                sp=s;
                newName+=s;
            }
        }
        return newName.toLowerCase();
    }