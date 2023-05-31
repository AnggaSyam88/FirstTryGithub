const express = require('express');
const bodyParser = require('body-parser');
const tf = require('@tensorflow/tfjs-node');

const app = express();
app.use(bodyParser.json());

const historyData = [
  { id: 1, input: 'input1', prediction: 'prediction1' },
  { id: 2, input: 'input2', prediction: 'prediction2' },
];

async function loadModel() {
  const model = await tf.loadLayersModel('path/to/model.h5');
  return model;
}

(async () => {
  const model = await loadModel();

  app.post('/predict', async (req, res) => {
    const input = req.body.input;

    
    const prediction = await model.predict(input);

 
    // ...

    const newEntry = { id: historyData.length + 1, input, prediction };
    historyData.push(newEntry);

    res.json({ prediction });
  });

  app.get('/history', (req, res) => {
    res.json(historyData);
  });

  app.get('/history/:id', (req, res) => {
    const id = parseInt(req.params.id);
    const entry = historyData.find((item) => item.id === id);

    if (entry) {
      res.json(entry);
    } else {
      res.status(404).json({ error: 'Entry not found' });
    }
  });

  const PORT = process.env.PORT || 3000;
  app.listen(PORT, () => {
    console.log(`Server is running on port ${PORT}`);
  });
})();