function change(e,l){var n=$("#"+e+" option:selected").html();$("#"+l).html(n)}function chkcons(){var e=document.getElementById("xingming1"),l=document.getElementById("phone1"),n=document.getElementById("pengyou"),t=document.getElementById("pyphone"),u=document.getElementById("messageBox"),s=/^([\*\`\.\·\u4e00-\u9fa5])+$/,i=/^1[3|4|5|7|8][0-9]\d{8}$/;if(null==oGuanxi1.value||""==oGuanxi1.value)return oGuanxi1.focus(),u.style.display="block",u.innerHTML="请选择关系",!1;if(console.log(e.value),null==e.value||""==e.value)return e.focus(),u.style.display="block",u.innerHTML="请输入姓名",!1;if(!s.test(e.value))return e.focus(),u.style.display="block",u.innerHTML="请输入中文姓名",!1;if(null==l.value||""==l.value)return l.focus(),u.style.display="block",u.innerHTML="请输入手机号",!1;if(!i.test(l.value)){var o=/^1[0-9]{2}[*]{2}[0-9]{4}$/;if(!o.test(l.value))return e.focus(),u.style.display="block",u.innerHTML="请输入正确手机号",!1}if(null==n||""==n.value)return n.focus(),u.style.display="block",u.innerHTML="请输入同学姓名",!1;if(!s.test(n.value))return n.focus(),u.style.display="block",u.innerHTML="请输入中文姓名",!1;if(null==t.value||""==t.value)return t.focus(),u.style.display="block",u.innerHTML="请输入手机号",!1;if(!i.test(t.value)){var o=/^1[0-9]{2}[*]{3}[0-9]{4}$/;if(!o.test(t.value))return e.focus(),u.style.display="block",u.innerHTML="请输入正确手机号",!1}}function chkgrpcons(){var e=document.getElementById("xingming1"),l=document.getElementById("phone1"),n=(document.getElementById("guanxi2"),document.getElementById("xingming2"),document.getElementById("phone2"),document.getElementById("pengyou")),t=document.getElementById("pyphone"),u=document.getElementById("messageBox"),s=/^([\*\`\.\·\u4e00-\u9fa5])+$/,i=/^1[3|4|5|7|8][0-9]\d{8}$/;if(null==e.value||""==e.value)return e.focus(),u.style.display="block",u.innerHTML="请输入姓名",!1;if(!s.test(e.value))return e.focus(),u.style.display="block",u.innerHTML="请输入中文姓名",!1;if(null==l.value||""==l.value)return l.focus(),u.style.display="block",u.innerHTML="请输入手机号",!1;if(!i.test(l.value)){var o=/^1[0-9]{2}[*]{3}[0-9]{4}$/;if(!o.test(l.value))return e.focus(),u.style.display="block",u.innerHTML="请输入正确手机号",!1}if(null==n||""==n.value)return n.focus(),u.style.display="block",u.innerHTML="请输入姓名",!1;if(!s.test(n.value))return n.focus(),u.style.display="block",u.innerHTML="请输入中文姓名",!1;if(null==t.value||""==t.value)return t.focus(),u.style.display="block",u.innerHTML="请输入手机号",!1;if(!i.test(t.value)){var o=/^1[0-9]{2}[*]{3}[0-9]{4}$/;if(!o.test(t.value))return e.focus(),u.style.display="block",u.innerHTML="请输入正确手机号",!1}return!0}