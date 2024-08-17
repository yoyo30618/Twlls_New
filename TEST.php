<!DOCTYPE html>
  <html lang="zh-Hant">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>縱向時間軸</title>
      <style>
          body {
              font-family: Arial, sans-serif;
              background-color: #f4f4f4;
              margin: 0;
              padding: 20px;
          }
          .timeline {
              position: relative;
              margin: auto;
              padding: 10px 0;
          }
          .timeline::after {
              content: '';
              position: absolute;
              left: 50%;
              height: 100%;
              border-left: 2px solid green;
              transform: translateX(-50%);
              top: 0; /* 確保線條從頂部開始 */
          }
          .event {
              display: flex;
              align-items: center;
              margin: 20px 0;
              position: relative;
          }
          .event .date {
              position: absolute;
              left: 30%; /* 調整日期位置 */
              padding: 5px;
              text-align: right;
          }
          .event .dot {
              position: absolute;
              left: 50%;
              transform: translateX(-50%);
              background-color: green;
              border-radius: 50%;
              width: 12px;
              height: 12px;
              top: 0; /* 將圓點放在線條上 */
          }
          .event .description {
              padding: 10px;
              margin-left: 50%;
          }
      </style>
  </head>
  <body>
      <div class="timeline">
          <div class="event">
              <div class="date">1991年<br>04月13日</div>
              <div class="dot"></div>
              <div class="description">第一次發起人會假國家政策研究中心會議室正式召開<br>
                會中討論了章程草案，填寫發起人名冊，選出籌備委員共九名：張裕宏、洪惟仁、董忠司、姚榮松、曹逢甫、江永進、陳恒嘉、羅肇錦、趙順文（依得票數順序），接著立即召開第一次籌備會議，討論進一步之籌備工作、決定未來一年半的工作計劃：<br>
                1. 1991年底以前完成音標研議。<br>
                2. 1992年底以前完成台語常用漢字表。籌備經費由台語社負擔。籌備伊始，台語社即慨捐一萬元，以為支應。<br>
              </div>
          </div>
          <div class="event">
              <div class="date">1991年<br>05月05日</div>
              <div class="dot"></div>
              <div class="description">召開第二次籌備會議</div>
          </div>
          <div class="event">
              <div class="date">1991年<br>05月08日</div>
              <div class="dot"></div>
              <div class="description">獲准正是籌備<br>由董忠司教授與洪惟仁教授遞送申請書前往內政部申請立案，並於 5月31日獲准正式籌備。</div>
          </div>
          <div class="event">
              <div class="date">1991年<br>06月23日</div>
              <div class="dot"></div>
              <div class="description">舉行第二次發起人會<br>在台北市ＹＭＣＡ舉行第二次發起人會，並依法在內政部社會司派員監督下舉行發起人會議，此為第一次正式之發起人會。會中討論章程草案，選出十一名籌備委員為：曹逢甫、江永進、姚榮松、董忠司、洪惟仁、羅肇錦、陳恒嘉、黃宣範、龔煌城、鍾榮富、張文彬（依得票順序）。並選出曹逢甫為主任委員。</div>
          </div>
          <div class="event">
              <div class="date">1991年<br>07月20日</div>
              <div class="dot"></div>
              <div class="description">召開第二次籌備會議<br>在國立臺灣師範大學召開第二次籌備會議，會中決定 8月17日召開「台灣語文學會」成立大會。</div>
          </div>
          <div class="event">
              <div class="date">1991年<br>08月17日</div>
              <div class="dot"></div>
              <div class="description">「台灣語文學會」正式成立。</div>
          </div>
      </div>
  </body>
  </html>