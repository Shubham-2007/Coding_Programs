import React, { useState, useEffect } from "react";
import { v4 as uuidv4 } from "uuid";
import NewSongForm from "./NewSongForm";
const SongsList = () => {
  const [songs, setSongs] = useState([
    { title: "Smiling when i die", id: 1 },
    { title: "Newyork city", id: 2 },
    { title: "Hydra", id: 3 },
  ]);

  const [age, setAge] = useState(20);

  const addSong = (title) => {
    setSongs([...songs, { title, id: uuidv4() }]);
  };

  useEffect(() => {
    console.log("useEffect hook run", songs);
  }, [songs]);

  useEffect(() => {
    console.log("useEffect hook run", age);
  }, [age]);
  return (
    <div className="song-list">
      <ul>
        {songs.map((song) => {
          return <li key={song.id}>{song.title}</li>;
        })}
      </ul>
      <NewSongForm addSong={addSong} />
      <button onClick={() => setAge(age + 1)}>Add 1 to age: {age}</button>
    </div>
  );
};

export default SongsList;
