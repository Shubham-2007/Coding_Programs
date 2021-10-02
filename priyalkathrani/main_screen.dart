import 'package:flutter/material.dart';

void main() => runApp(main_screen()); 

class main_screen extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      
      home: Scaffold(backgroundColor: Colors.pinkAccent,
      body: 
        Text('Download')
      ),

    );
  }
}