import React from 'react';
import ReactDOM from 'react-dom';

import JqxKnob from '../../../jqwidgets-react/react_jqxknob.js';

class App extends React.Component {
    render() {
        let marks = {
            colorRemaining: { color: '#373636', border: '#373636' },
            colorProgress: { color: '#373636', border: '#373636' },
            type: 'line',
            offset: '71%',
            thickness: 1,
            size: '6%',
            majorSize: '9%',
            majorInterval: 10,
            minorInterval: 2
        };  

        let labels = {
            offset: '88%',
            step: 10,
            visible: true
        };

        let progressBar = {
            size: '70%',
            offset: '0%',
            background: {
                stroke: '#373636', strokeWidth: 1, fill: { color: '#a7a7a7', gradientType: "linear", gradientStops: [[0, 1], [50, 0.5], [100, 1]] }
            }
        };

        let pointer = {
            type: 'circle', style: { fill: { color: '#a4a3a3', gradientType: "linear", gradientStops: [[0, 0.5], [50, 0.6], [100, 1]] }, stroke: '#333' },
            size: '10%', offset: '50%'
        };

        return (
            <JqxKnob
                min={0} max={100} value={60} snapToStep={true}
                startAngle={120} endAngle={480} rotation={'clockwise'}
                marks={marks} labels={labels}
                progressBar={progressBar} pointer={pointer}
            />
        )
    }
}

ReactDOM.render(<App />, document.getElementById('app'));
