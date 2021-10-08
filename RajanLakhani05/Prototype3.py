from PyQt5.QtWidgets import QApplication, QWidget
from PySide2.QtTextToSpeech import QTextToSpeech, QVoice
from PyDictionary import PyDictionary
from PyQt5 import QtCore, QtGui, QtWidgets



class Ui_Texttospeech(QWidget):
    def click(self):#this function states what is going to happen when searchbutton is clicked
        self.searchbutton.setEnabled(False)
        self.engine.setVoice(self.voices[self.voicecombobox.currentIndex()])

        self.engine.setVolume(float(self.volumeslider.value()) / 100)
         #plays text when searchbutton is clicked
        text=self.searchbox.text()
        dictionary=PyDictionary()
        meaning=str(dictionary.meaning(text))
        meaning=meaning.replace('{','')
        meaning=meaning.replace('}','')
        meaning=meaning.replace('[','')
        meaning=meaning.replace(']','')
        meaning=meaning.replace("'",'')
        #print(meaning)
        if meaning == 'None':
            self.engine.say('Pronounciation:{}'+text)
            self.engine.say('Sorry Meaning Not Found')
            
            self.resultbox.setHtml('Sorry Meaning not found !!!')
        else:
            self.engine.say('Pronounciation:{}'+text)
            self.engine.say('Meaning: {}' +meaning)
            self.resultbox.setHtml(meaning)
            
        #print("Search clicked")
        
        
        #self.resultbox.setPlainText(meaning)
        #self.resultbox.textCursor().insertText(meaning)
        #self.resultbox.textCursor().insertHtml(meaning)
        
        

    def setupUi(self, Texttospeech):
        Texttospeech.setObjectName("Texttospeech")
        Texttospeech.resize(512, 723)
        Texttospeech.setStyleSheet("")
        icon = QtGui.QIcon()
        icon.addPixmap(QtGui.QPixmap("icon2.ico"), QtGui.QIcon.Normal, QtGui.QIcon.Off)
        Texttospeech.setWindowIcon(icon)
        self.centralwidget = QtWidgets.QWidget(Texttospeech)
        
        self.centralwidget.setObjectName("centralwidget")
        self.gridLayout = QtWidgets.QGridLayout(self.centralwidget)
        self.gridLayout.setObjectName("gridLayout")
        self.frame_3 = QtWidgets.QFrame(self.centralwidget)
        self.frame_3.setStyleSheet("")
        self.frame_3.setFrameShape(QtWidgets.QFrame.StyledPanel)
        self.frame_3.setFrameShadow(QtWidgets.QFrame.Raised)
        self.frame_3.setObjectName("frame_3")
        self.gridLayout_2 = QtWidgets.QGridLayout(self.frame_3)
        self.gridLayout_2.setObjectName("gridLayout_2")
        self.horizontalLayout = QtWidgets.QHBoxLayout()
        self.horizontalLayout.setObjectName("horizontalLayout")
        
        self.enterwordlab = QtWidgets.QLabel(self.frame_3)

        font = QtGui.QFont()
        font.setFamily("Copperplate Gothic Bold")
        font.setPointSize(14)

        self.enterwordlab.setFont(font)
        self.enterwordlab.setObjectName("enterwordlab") #Enter word label is being declared
        self.horizontalLayout.addWidget(self.enterwordlab)

        self.searchbox = QtWidgets.QLineEdit(self.frame_3) #search box is defined here
        self.searchbox.setObjectName("searchbox")
        self.searchbox.setClearButtonEnabled(True)
        self.horizontalLayout.addWidget(self.searchbox)

        self.searchbutton = QtWidgets.QPushButton(self.frame_3)#search button is defined here
        self.searchbutton.setObjectName("searchbutton")
        self.searchbox.returnPressed.connect(self.click)
        self.searchbutton.clicked.connect(self.click)   #click() is called when  search button is pressed

        self.horizontalLayout.addWidget(self.searchbutton)
        self.gridLayout_2.addLayout(self.horizontalLayout, 0, 0, 1, 1)
        self.line = QtWidgets.QFrame(self.frame_3)
        self.line.setStyleSheet("background-color: rgb(85, 255, 0);")#background colour in result is defined

        self.line.setFrameShape(QtWidgets.QFrame.HLine)
        self.line.setFrameShadow(QtWidgets.QFrame.Sunken)
        self.line.setObjectName("line")#Lines which divides the gui is defined
        self.gridLayout_2.addWidget(self.line, 1, 0, 1, 1)

        self.horizontalLayout_4 = QtWidgets.QHBoxLayout()
        self.horizontalLayout_4.setObjectName("horizontalLayout_4")
        self.voicelab = QtWidgets.QLabel(self.frame_3)
        font = QtGui.QFont()
        font.setFamily("Copperplate Gothic Bold")
        font.setPointSize(14)

        self.voicelab.setFont(font)#Label of available voices is defined here
        self.voicelab.setObjectName("voicelab")
        self.horizontalLayout_4.addWidget(self.voicelab)

        self.voicecombobox = QtWidgets.QComboBox(self.frame_3)#combobox for available voices is created here
        self.voicecombobox.setStyleSheet("gridline-color: rgb(255, 255, 255);")
        self.voicecombobox.setObjectName("voicecombobox")
        self.horizontalLayout_4.addWidget(self.voicecombobox)

        self.gridLayout_2.addLayout(self.horizontalLayout_4, 2, 0, 1, 1)
        self.line_3 = QtWidgets.QFrame(self.frame_3)
        self.line_3.setStyleSheet("background-color: rgb(0, 0, 0);")
        self.line_3.setFrameShape(QtWidgets.QFrame.HLine)
        self.line_3.setFrameShadow(QtWidgets.QFrame.Sunken)
        self.line_3.setObjectName("line_3")
        self.gridLayout_2.addWidget(self.line_3, 3, 0, 1, 1)
        self.gridLayout.addWidget(self.frame_3, 0, 0, 1, 1)
        self.frame_2 = QtWidgets.QFrame(self.centralwidget)
        self.frame_2.setFrameShape(QtWidgets.QFrame.StyledPanel)
        self.frame_2.setFrameShadow(QtWidgets.QFrame.Raised)
        self.frame_2.setObjectName("frame_2")
        self.gridLayout_3 = QtWidgets.QGridLayout(self.frame_2)
        self.gridLayout_3.setObjectName("gridLayout_3")
        self.horizontalLayout_2 = QtWidgets.QHBoxLayout()
        self.horizontalLayout_2.setObjectName("horizontalLayout_2")

        self.resultlab = QtWidgets.QLabel(self.frame_2)#Label of result and its Font is defined
        font = QtGui.QFont()
        font.setFamily("Copperplate Gothic Bold")
        font.setPointSize(14)
        self.resultlab.setFont(font)
        self.resultlab.setStyleSheet("background-color: rgb(209, 0, 0);")
        self.resultlab.setObjectName("resultlab")
        self.horizontalLayout_2.addWidget(self.resultlab)

        self.resultbox = QtWidgets.QTextEdit(self.frame_2)#Result box is defined where we have to store meaning of our word
        font = QtGui.QFont()
        font.setPointSize(16)
        self.resultbox.setFont(font)
        self.resultbox.setObjectName("resultbox")
        self.horizontalLayout_2.addWidget(self.resultbox)

        self.gridLayout_3.addLayout(self.horizontalLayout_2, 0, 0, 1, 1)
        self.line_2 = QtWidgets.QFrame(self.frame_2)
        self.line_2.setStyleSheet("background-color: rgb(85, 255, 0);")
        self.line_2.setFrameShape(QtWidgets.QFrame.HLine)
        self.line_2.setFrameShadow(QtWidgets.QFrame.Sunken)
        self.line_2.setObjectName("line_2")
        self.gridLayout_3.addWidget(self.line_2, 1, 0, 1, 1)
        self.horizontalLayout_3 = QtWidgets.QHBoxLayout()
        self.horizontalLayout_3.setObjectName("horizontalLayout_3")

        self.volumelab = QtWidgets.QLabel(self.frame_2)#Label Of Volume and its font
        font = QtGui.QFont()
        font.setFamily("Copperplate Gothic Bold")
        font.setPointSize(14)
        self.volumelab.setFont(font)
        self.volumelab.setStyleSheet("border-color: rgb(255, 0, 0);")
        self.volumelab.setObjectName("volumelab")

        self.horizontalLayout_3.addWidget(self.volumelab)

        self.volumeslider = QtWidgets.QSlider(self.frame_2)#Volume slider is defined here which adjusts volume
        self.volumeslider.setOrientation(QtCore.Qt.Horizontal)
        self.volumeslider.setMinimum(0)
        self.volumeslider.setMaximum(100)
        self.volumeslider.setObjectName("volumeslider")
        self.horizontalLayout_3.addWidget(self.volumeslider)
        self.volumeslider.setValue(100)

        self.gridLayout_3.addLayout(self.horizontalLayout_3, 2, 0, 1, 1)
        self.gridLayout.addWidget(self.frame_2, 1, 0, 1, 1)
        Texttospeech.setCentralWidget(self.centralwidget)

        self.retranslateUi(Texttospeech)
        QtCore.QMetaObject.connectSlotsByName(Texttospeech)

        self.engine = None#Whole code for playing inputted text starts from here
        engineNames = QTextToSpeech.availableEngines()
        if len(engineNames) > 0:
            engineName = engineNames[0]
            self.engine = QTextToSpeech(engineName)
            self.engine.stateChanged.connect(self.stateChanged)
            self.voices = []
            for voice in self.engine.availableVoices():
                self.voices.append(voice)
                self.voicecombobox.addItem(voice.name())
        else:
            self.setWindowTitle('TextToSpeech (no engines available)')
            self.searchbutton.setEnabled(False)
            
    def stateChanged(self, state):  #Defines when state of search button is changed
        if (state == QTextToSpeech.State.Ready):
            self.searchbutton.setEnabled(True)

    def retranslateUi(self, Texttospeech):
        _translate = QtCore.QCoreApplication.translate
        Texttospeech.setWindowTitle(_translate("Texttospeech", "Text to Speech"))
        self.enterwordlab.setText(_translate("Texttospeech", "Enter Word:"))
        self.searchbox.setPlaceholderText(_translate("Texttospeech", "Type.."))
        self.searchbutton.setText(_translate("Texttospeech", "Search"))
        self.voicelab.setText(_translate("Texttospeech", "Voice:"))
        self.resultlab.setText(_translate("Texttospeech", "Result:"))
        self.volumelab.setText(_translate("Texttospeech", "Volume:"))
if __name__ == "__main__":
    import sys
    app = QtWidgets.QApplication(sys.argv)
    Texttospeech = QtWidgets.QMainWindow()
    ui = Ui_Texttospeech()
    ui.setupUi(Texttospeech)
    Texttospeech.show()
    sys.exit(app.exec_())
