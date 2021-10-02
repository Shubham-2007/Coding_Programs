import 'package:flutter/material.dart';  
import './youtube_view.dart';  
import './main_screen.dart';  
import './most_viewed_sreen.dart';

void main() => runApp(MyApp1());  
  
class MyApp1 extends StatelessWidget {  
  @override  
  Widget build(BuildContext context) {  
    return MaterialApp(  
      theme: ThemeData(
        primaryColor: Color.fromRGBO(176, 81, 40, 1)

      ),
      home: DefaultTabController(  
        length: 3,  
        child: Scaffold(  
          
          appBar: AppBar(  
            title: Text('𝙔𝙤𝙪𝙏𝙪𝙗𝙚 𝙑𝙞𝙙𝙚𝙤 𝘿𝙤𝙬𝙣𝙡𝙤𝙖𝙙𝙚𝙧',style: TextStyle(decoration: TextDecoration.none,color: Colors.black),),  
            centerTitle: true,
            backgroundColor: Color.fromRGBO(176, 81, 40, 1),
            
            toolbarHeight: 120.0,
            elevation: 20.0,
            bottom: TabBar(  
              
              tabs: [  
                Tab(icon: Icon(Icons.youtube_searched_for_rounded), text: "Youtube"),  
                Tab(icon: Icon(Icons.arrow_circle_down_outlined), text: "download"),
                Tab(icon: Icon(Icons.remove_red_eye_outlined), text: "Mostviewed")  
              ],  
            ),  
          ),  
          body: TabBarView(  
            children: [  
              ywv_screen(),
              main_screen(),  
              mvv_screen(),  
            ],  
          ),  
        ),  
      ),  
    );  
  }  
}  